/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableModel;
import io.github.tobiasbriones.ep.northwind.model.model.product.Product;

import java.time.LocalDate;
import java.util.Objects;

/**
 * Defines an OrderDetail for the Northwind's database model.
 */
public final class OrderDetail extends IdentifiableModel {

    private final Order order;
    private final Product product;
    private final OrderDetailStatus status;
    private final double quantity;
    private final double unitPrice;
    private final double discount;
    private final LocalDate dateAllocated;
    private final int purchaseOrderId;
    private final int inventoryId;

    OrderDetail(
        int id,
        Order order,
        Product product,
        OrderDetailStatus status,
        double quantity,
        double unitPrice,
        double discount,
        LocalDate dateAllocated,
        int purchaseOrderId,
        int inventoryId
    ) {
        super(id);
        this.order = order;
        this.product = product;
        this.status = status;
        this.quantity = quantity;
        this.unitPrice = unitPrice;
        this.discount = discount;
        this.dateAllocated = dateAllocated;
        this.purchaseOrderId = purchaseOrderId;
        this.inventoryId = inventoryId;
    }

    public Order getOrder() {
        return order;
    }

    public Product getProduct() {
        return product;
    }

    public OrderDetailStatus getStatus() {
        return status;
    }

    public double getQuantity() {
        return quantity;
    }

    public double getUnitPrice() {
        return unitPrice;
    }

    public double getDiscount() {
        return discount;
    }

    public LocalDate getDateAllocated() {
        return dateAllocated;
    }

    public int getPurchaseOrderId() {
        return purchaseOrderId;
    }

    public int getInventoryId() {
        return inventoryId;
    }

    @Override
    public int hashCode() {
        //noinspection ObjectInstantiationInEqualsHashCode
        return Objects.hash(
            getId(),
            order,
            product,
            status,
            quantity,
            unitPrice,
            discount,
            dateAllocated,
            purchaseOrderId,
            inventoryId
        );
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        final OrderDetail orderDetail = (OrderDetail) obj;
        return isEqualsTo(orderDetail);
    }

    @Override
    public String toString() {
        return "OrderDetail[" +
               "order=" + order + ", " +
               "product=" + product + ", " +
               "status=" + status + ", " +
               "quantity=" + quantity + ", " +
               "unitPrice=" + unitPrice + ", " +
               "discount=" + discount + ", " +
               "dateAllocated=" + dateAllocated + ", " +
               "purchaseOrderId=" + purchaseOrderId + ", " +
               "inventoryId=" + inventoryId + ", " +
               "] " + super.toString();
    }

    private boolean isEqualsTo(OrderDetail other) {
        return getId() == other.getId() &&
               Double.compare(other.getQuantity(), quantity) == 0 &&
               Double.compare(other.getUnitPrice(), unitPrice) == 0 &&
               Double.compare(other.getDiscount(), discount) == 0 &&
               purchaseOrderId == other.getPurchaseOrderId() &&
               inventoryId == other.getInventoryId() &&
               Objects.equals(order, other.getOrder()) &&
               Objects.equals(product, other.getProduct()) &&
               Objects.equals(status, other.getStatus()) &&
               Objects.equals(dateAllocated, other.getDateAllocated());
    }

}
