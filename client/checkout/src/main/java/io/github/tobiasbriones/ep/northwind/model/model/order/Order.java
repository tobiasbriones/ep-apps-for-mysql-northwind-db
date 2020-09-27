/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableModel;
import io.github.tobiasbriones.ep.northwind.model.model.customer.Customer;
import io.github.tobiasbriones.ep.northwind.model.model.employee.Employee;
import io.github.tobiasbriones.ep.northwind.model.model.shipper.Shipper;

import java.time.LocalDateTime;

/**
 * Defines an Order for the Northwind's database model.
 */
public final class Order extends IdentifiableModel {

    private final Employee employee;
    private final Customer customer;
    private final Shipper shipper;
    private final OrderTaxStatus orderTaxStatus;
    private final OrderStatus orderStatus;
    private final LocalDateTime orderDate;
    private final LocalDateTime shippedDate;
    private final String shipName;
    private final String shipAddress;
    private final String shipCity;
    private final String shipProvince;
    private final String shipZipPostalCode;
    private final String shipCountryRegion;
    private final double shippingFee;
    private final double taxes;
    private final String paymentType;
    private final LocalDateTime paidDate;
    private final String notes;
    private final double taxRate;

    Order(
        int id,
        Employee employee,
        Customer customer,
        Shipper shipper,
        OrderTaxStatus orderTaxStatus,
        OrderStatus orderStatus,
        LocalDateTime orderDate,
        LocalDateTime shippedDate,
        String shipName,
        String shipAddress,
        String shipCity,
        String shipProvince,
        String shipZipPostalCode,
        String shipCountryRegion,
        double shippingFee,
        double taxes,
        String paymentType,
        LocalDateTime paidDate,
        String notes,
        double taxRate
    ) {
        super(id);
        this.employee = employee;
        this.customer = customer;
        this.shipper = shipper;
        this.orderTaxStatus = orderTaxStatus;
        this.orderStatus = orderStatus;
        this.orderDate = orderDate;
        this.shippedDate = shippedDate;
        this.shipName = shipName;
        this.shipAddress = shipAddress;
        this.shipCity = shipCity;
        this.shipProvince = shipProvince;
        this.shipZipPostalCode = shipZipPostalCode;
        this.shipCountryRegion = shipCountryRegion;
        this.shippingFee = shippingFee;
        this.taxes = taxes;
        this.paymentType = paymentType;
        this.paidDate = paidDate;
        this.notes = notes;
        this.taxRate = taxRate;
    }

    public Employee getEmployee() {
        return employee;
    }

    public Customer getCustomer() {
        return customer;
    }

    public Shipper getShipper() {
        return shipper;
    }

    public OrderTaxStatus getOrderTaxStatus() {
        return orderTaxStatus;
    }

    public OrderStatus getOrderStatus() {
        return orderStatus;
    }

    public LocalDateTime getOrderDate() {
        return orderDate;
    }

    public LocalDateTime getShippedDate() {
        return shippedDate;
    }

    public String getShipName() {
        return shipName;
    }

    public String getShipAddress() {
        return shipAddress;
    }

    public String getShipCity() {
        return shipCity;
    }

    public String getShipProvince() {
        return shipProvince;
    }

    public String getShipZipPostalCode() {
        return shipZipPostalCode;
    }

    public String getShipCountryRegion() {
        return shipCountryRegion;
    }

    public double getShippingFee() {
        return shippingFee;
    }

    public double getTaxes() {
        return taxes;
    }

    public String getPaymentType() {
        return paymentType;
    }

    public LocalDateTime getPaidDate() {
        return paidDate;
    }

    public String getNotes() {
        return notes;
    }

    public double getTaxRate() {
        return taxRate;
    }

    @Override
    public String toString() {
        return "Order[" +
               "employee=" + employee + ", " +
               "customer=" + customer + ", " +
               "shipper=" + shipper + ", " +
               "orderTaxStatus=" + orderTaxStatus + ", " +
               "orderStatus=" + orderStatus + ", " +
               "orderDate=" + orderDate + ", " +
               "shippedDate=" + shippedDate + ", " +
               "shipName=" + shipName + ", " +
               "shipAddress=" + shipAddress + ", " +
               "shipCity=" + shipCity + ", " +
               "shipProvince=" + shipProvince + ", " +
               "shipZipPostalCode=" + shipZipPostalCode + ", " +
               "shipCountryRegion=" + shipCountryRegion + ", " +
               "shippingFee=" + shippingFee + ", " +
               "taxes=" + taxes + ", " +
               "paymentType=" + paymentType + ", " +
               "paidDate=" + paidDate + ", " +
               "notes=" + notes + ", " +
               "taxRate=" + taxRate + ", " +
               "] " + super.toString();
    }

}
