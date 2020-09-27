/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.product.Product;

import java.time.LocalDate;

/**
 * Defines an OrderDetailBuilder pattern for the {@link OrderDetail} model.
 */
public final class OrderDetailBuilder {

    private final int id;
    private Order order;
    private Product product;
    private OrderDetailStatus status;
    private double quantity;
    private double unitPrice;
    private double discount;
    private LocalDate dateAllocated;
    private int purchaseOrderId;
    private int inventoryId;

    public OrderDetailBuilder(int id) {
        this.id = id;
        this.order = null;
        this.product = null;
        this.status = null;
        this.quantity = 0.0d;
        this.unitPrice = 0.0d;
        this.discount = 0.0d;
        this.dateAllocated = null;
        this.purchaseOrderId = 0;
        this.inventoryId = 0;
    }

    public int getId() {
        return id;
    }

    public Order getOrder() {
        return order;
    }

    public OrderDetailBuilder setOrder(Order value) {
        order = value;
        return this;
    }

    public Product getProduct() {
        return product;
    }

    public OrderDetailBuilder setProduct(Product value) {
        product = value;
        return this;
    }

    public OrderDetailStatus getStatus() {
        return status;
    }

    public OrderDetailBuilder setStatus(OrderDetailStatus value) {
        status = value;
        return this;
    }

    public double getQuantity() {
        return quantity;
    }

    public OrderDetailBuilder setQuantity(double value) {
        quantity = value;
        return this;
    }

    public double getUnitPrice() {
        return unitPrice;
    }

    public OrderDetailBuilder setUnitPrice(double value) {
        unitPrice = value;
        return this;
    }

    public double getDiscount() {
        return discount;
    }

    public OrderDetailBuilder setDiscount(double value) {
        discount = value;
        return this;
    }

    public LocalDate getDateAllocated() {
        return dateAllocated;
    }

    public OrderDetailBuilder setDateAllocated(LocalDate value) {
        dateAllocated = value;
        return this;
    }

    public int getPurchaseOrderId() {
        return purchaseOrderId;
    }

    public OrderDetailBuilder setPurchaseOrderId(int value) {
        purchaseOrderId = value;
        return this;
    }

    public int getInventoryId() {
        return inventoryId;
    }

    public OrderDetailBuilder setInventoryId(int value) {
        inventoryId = value;
        return this;
    }

    @Override
    public String toString() {
        return "OrderDetailBuilder[" +
               "id=" + id + ", " +
               "order=" + order + ", " +
               "product=" + product + ", " +
               "status=" + status + ", " +
               "quantity=" + quantity + ", " +
               "unitPrice=" + unitPrice + ", " +
               "discount=" + discount + ", " +
               "dateAllocated=" + dateAllocated + ", " +
               "purchaseOrderId=" + purchaseOrderId + ", " +
               "inventoryId=" + inventoryId + ", " +
               "]";
    }

    public OrderDetail build() {
        return new OrderDetail(
            id,
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

}