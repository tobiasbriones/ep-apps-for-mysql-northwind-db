/*
 * Copyright (c) 2020 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.AbstractBuilder;
import io.github.tobiasbriones.ep.northwind.model.model.product.Product;

import java.time.LocalDate;

/**
 * Defines an OrderDetailBuilder pattern for the {@link OrderDetail} model.
 */
public final class OrderDetailBuilder extends AbstractBuilder<OrderDetail> {

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
        super(id);
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

    @Override
    public OrderDetail build() {
        return new OrderDetail(
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

}
