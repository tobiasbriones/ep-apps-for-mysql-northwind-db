/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order.purchase;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;
import io.github.tobiasbriones.ep.northwind.model.model.employee.Employee;
import io.github.tobiasbriones.ep.northwind.model.model.supplier.Supplier;

import java.time.LocalDate;
import java.util.Objects;

/**
 * Defines a PurchaseOrder for the Northwind's database model.
 */
public final class PurchaseOrder extends IdentifiableRecord {

    private final Supplier supplier;
    private final Employee createdBy;
    private final PurchaseOrderStatus status;
    private final LocalDate submittedDate;
    private final LocalDate creationDate;
    private final LocalDate expectedDate;
    private final double shippingFee;
    private final double taxes;
    private final LocalDate paymentDate;
    private final double paymentAmount;
    private final String paymentMethod;
    private final String notes;
    private final int approvedBy;
    private final LocalDate approveDate;
    private final int submittedBy;

    PurchaseOrder(
        int id,
        Supplier supplier,
        Employee createdBy,
        PurchaseOrderStatus status,
        LocalDate submittedDate,
        LocalDate creationDate,
        LocalDate expectedDate,
        double shippingFee,
        double taxes,
        LocalDate paymentDate,
        double paymentAmount,
        String paymentMethod,
        String notes,
        int approvedBy,
        LocalDate approveDate,
        int submittedBy
    ) {
        super(id);
        this.supplier = supplier;
        this.createdBy = createdBy;
        this.status = status;
        this.submittedDate = submittedDate;
        this.creationDate = creationDate;
        this.expectedDate = expectedDate;
        this.shippingFee = shippingFee;
        this.taxes = taxes;
        this.paymentDate = paymentDate;
        this.paymentAmount = paymentAmount;
        this.paymentMethod = paymentMethod;
        this.notes = notes;
        this.approvedBy = approvedBy;
        this.approveDate = approveDate;
        this.submittedBy = submittedBy;
    }

    public Supplier getSupplier() {
        return supplier;
    }

    public Employee getCreatedBy() {
        return createdBy;
    }

    public PurchaseOrderStatus getStatus() {
        return status;
    }

    public LocalDate getSubmittedDate() {
        return submittedDate;
    }

    public LocalDate getCreationDate() {
        return creationDate;
    }

    public LocalDate getExpectedDate() {
        return expectedDate;
    }

    public double getShippingFee() {
        return shippingFee;
    }

    public double getTaxes() {
        return taxes;
    }

    public LocalDate getPaymentDate() {
        return paymentDate;
    }

    public double getPaymentAmount() {
        return paymentAmount;
    }

    public String getPaymentMethod() {
        return paymentMethod;
    }

    public String getNotes() {
        return notes;
    }

    public int getApprovedBy() {
        return approvedBy;
    }

    public LocalDate getApproveDate() {
        return approveDate;
    }

    public int getSubmittedBy() {
        return submittedBy;
    }

    @Override
    public int hashCode() {
        //noinspection ObjectInstantiationInEqualsHashCode
        return Objects.hash(
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

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        final PurchaseOrder purchaseOrder = (PurchaseOrder) obj;
        return isEqualsTo(purchaseOrder);
    }

    @Override
    public String toString() {
        return "PurchaseOrder[" +
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

    private boolean checkEqualsPart1(PurchaseOrder purchaseOrder) {
        return Double.compare(purchaseOrder.getShippingFee(), shippingFee) == 0 &&
               Double.compare(purchaseOrder.getTaxes(), taxes) == 0 &&
               Double.compare(purchaseOrder.getPaymentAmount(), paymentAmount) == 0 &&
               approvedBy == purchaseOrder.getApprovedBy() &&
               submittedBy == purchaseOrder.getSubmittedBy();
    }

    private boolean checkEqualsPart2(PurchaseOrder purchaseOrder) {
        return Objects.equals(supplier, purchaseOrder.getSupplier()) &&
               Objects.equals(createdBy, purchaseOrder.getCreatedBy()) &&
               Objects.equals(status, purchaseOrder.getStatus()) &&
               Objects.equals(submittedDate, purchaseOrder.getSubmittedDate()) &&
               Objects.equals(creationDate, purchaseOrder.getCreationDate()) &&
               Objects.equals(expectedDate, purchaseOrder.getExpectedDate()) &&
               Objects.equals(paymentDate, purchaseOrder.getPaymentDate()) &&
               Objects.equals(paymentMethod, purchaseOrder.getPaymentMethod()) &&
               Objects.equals(notes, purchaseOrder.getNotes()) &&
               Objects.equals(approveDate, purchaseOrder.getApproveDate());
    }

    private boolean isEqualsTo(PurchaseOrder purchaseOrder) {
        return getId() == purchaseOrder.getId() &&
               checkEqualsPart1(purchaseOrder) &&
               checkEqualsPart2(purchaseOrder);
    }

}
