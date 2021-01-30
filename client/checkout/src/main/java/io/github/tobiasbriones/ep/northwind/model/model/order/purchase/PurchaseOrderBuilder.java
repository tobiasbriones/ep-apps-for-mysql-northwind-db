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

package io.github.tobiasbriones.ep.northwind.model.model.order.purchase;

import io.github.tobiasbriones.ep.northwind.model.model.AbstractBuilder;
import io.github.tobiasbriones.ep.northwind.model.model.employee.Employee;
import io.github.tobiasbriones.ep.northwind.model.model.supplier.Supplier;

import java.time.LocalDate;

/**
 * Defines a PurchaseOrderBuilder for the {@link PurchaseOrder} model.
 */
public final class PurchaseOrderBuilder extends AbstractBuilder<PurchaseOrder> {

    private Supplier supplier;
    private Employee createdBy;
    private PurchaseOrderStatus status;
    private LocalDate submittedDate;
    private LocalDate creationDate;
    private LocalDate expectedDate;
    private double shippingFee;
    private double taxes;
    private LocalDate paymentDate;
    private double paymentAmount;
    private String paymentMethod;
    private String notes;
    private int approvedBy;
    private LocalDate approveDate;
    private int submittedBy;

    public PurchaseOrderBuilder(int id) {
        super(id);
        this.supplier = null;
        this.createdBy = null;
        this.status = null;
        this.submittedDate = null;
        this.creationDate = null;
        this.expectedDate = null;
        this.shippingFee = 0.0d;
        this.taxes = 0.0d;
        this.paymentDate = null;
        this.paymentAmount = 0.0d;
        this.paymentMethod = "";
        this.notes = "";
        this.approvedBy = 0;
        this.approveDate = null;
        this.submittedBy = 0;
    }

    //                                                                        //
    //                      ACCESSOR AND MUTATOR METHODS                      //
    //                                                                        //

    public Supplier getSupplier() {
        return supplier;
    }

    public PurchaseOrderBuilder setSupplier(Supplier value) {
        supplier = value;
        return this;
    }

    public Employee getCreatedBy() {
        return createdBy;
    }

    public PurchaseOrderBuilder setCreatedBy(Employee value) {
        createdBy = value;
        return this;
    }

    public PurchaseOrderStatus getStatus() {
        return status;
    }

    public PurchaseOrderBuilder setStatus(PurchaseOrderStatus value) {
        status = value;
        return this;
    }

    public LocalDate getSubmittedDate() {
        return submittedDate;
    }

    public PurchaseOrderBuilder setSubmittedDate(LocalDate value) {
        submittedDate = value;
        return this;
    }

    public LocalDate getCreationDate() {
        return creationDate;
    }

    public PurchaseOrderBuilder setCreationDate(LocalDate value) {
        creationDate = value;
        return this;
    }

    public LocalDate getExpectedDate() {
        return expectedDate;
    }

    public PurchaseOrderBuilder setExpectedDate(LocalDate value) {
        expectedDate = value;
        return this;
    }

    public double getShippingFee() {
        return shippingFee;
    }

    public PurchaseOrderBuilder setShippingFee(double value) {
        shippingFee = value;
        return this;
    }

    public double getTaxes() {
        return taxes;
    }

    public PurchaseOrderBuilder setTaxes(double value) {
        taxes = value;
        return this;
    }

    public LocalDate getPaymentDate() {
        return paymentDate;
    }

    public PurchaseOrderBuilder setPaymentDate(LocalDate value) {
        paymentDate = value;
        return this;
    }

    public double getPaymentAmount() {
        return paymentAmount;
    }

    public PurchaseOrderBuilder setPaymentAmount(double value) {
        paymentAmount = value;
        return this;
    }

    public String getPaymentMethod() {
        return paymentMethod;
    }

    public PurchaseOrderBuilder setPaymentMethod(String value) {
        paymentMethod = value;
        return this;
    }

    public String getNotes() {
        return notes;
    }

    public PurchaseOrderBuilder setNotes(String value) {
        notes = value;
        return this;
    }

    public int getApprovedBy() {
        return approvedBy;
    }

    public PurchaseOrderBuilder setApprovedBy(int value) {
        approvedBy = value;
        return this;
    }

    public LocalDate getApproveDate() {
        return approveDate;
    }

    public PurchaseOrderBuilder setApproveDate(LocalDate value) {
        approveDate = value;
        return this;
    }

    public int getSubmittedBy() {
        return submittedBy;
    }

    public PurchaseOrderBuilder setSubmittedBy(int value) {
        submittedBy = value;
        return this;
    }
    //                  END OF ACCESSOR AND MUTATOR METHODS                   //

    @Override
    public String toString() {
        return "PurchaseOrderBuilder[" +
               "supplier=" + supplier + ", " +
               "createdBy=" + createdBy + ", " +
               "status=" + status + ", " +
               "submittedDate=" + submittedDate + ", " +
               "creationDate=" + creationDate + ", " +
               "expectedDate=" + expectedDate + ", " +
               "shippingFee=" + shippingFee + ", " +
               "taxes=" + taxes + ", " +
               "paymentDate=" + paymentDate + ", " +
               "paymentAmount=" + paymentAmount + ", " +
               "paymentMethod=" + paymentMethod + ", " +
               "notes=" + notes + ", " +
               "approvedBy=" + approvedBy + ", " +
               "approveDate=" + approveDate + ", " +
               "submittedBy=" + submittedBy + ", " +
               "] " + super.toString();
    }

    @Override
    public PurchaseOrder build() {
        return new PurchaseOrder(
            getId(),
            supplier,
            createdBy,
            status,
            submittedDate,
            creationDate,
            expectedDate,
            shippingFee,
            taxes,
            paymentDate,
            paymentAmount,
            paymentMethod,
            notes,
            approvedBy,
            approveDate,
            submittedBy
        );
    }

}
