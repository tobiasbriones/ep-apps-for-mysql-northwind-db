/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.AbstractBuilder;
import io.github.tobiasbriones.ep.northwind.model.model.customer.Customer;
import io.github.tobiasbriones.ep.northwind.model.model.employee.Employee;
import io.github.tobiasbriones.ep.northwind.model.model.shipper.Shipper;

import java.time.LocalDateTime;

/**
 * Defines an OrderBuilder pattern for the {@link Order} model.
 */
public final class OrderBuilder extends AbstractBuilder<Order> {

    private Employee employee;
    private Customer customer;
    private Shipper shipper;
    private OrderTaxStatus orderTaxStatus;
    private OrderStatus orderStatus;
    private LocalDateTime orderDate;
    private LocalDateTime shippedDate;
    private String shipName;
    private String shipAddress;
    private String shipCity;
    private String shipProvince;
    private String shipZipPostalCode;
    private String shipCountryRegion;
    private double shippingFee;
    private double taxes;
    private String paymentType;
    private LocalDateTime paidDate;
    private String notes;
    private double taxRate;

    public OrderBuilder(int id) {
        /* Those nulls should be replaced by default non-null values but it's
         * too much overhead for now and the given database is poorly
         * designed to bring a more realistic business model
         */
        super(id);
        this.employee = null;
        this.customer = null;
        this.shipper = null;
        this.orderTaxStatus = null;
        this.orderStatus = null;
        this.orderDate = null;
        this.shippedDate = null;
        this.shipName = "";
        this.shipAddress = "";
        this.shipCity = "";
        this.shipProvince = "";
        this.shipZipPostalCode = "";
        this.shipCountryRegion = "";
        this.shippingFee = 0.0d;
        this.taxes = 0.0d;
        this.paymentType = "";
        this.paidDate = null;
        this.notes = "";
        this.taxRate = 0.0d;
    }

    //                                                                        //
    //                      ACCESSOR AND MUTATOR METHODS                      //
    //                                                                        //

    public Employee getEmployee() {
        return employee;
    }

    public OrderBuilder setEmployee(Employee value) {
        employee = value;
        return this;
    }

    public Customer getCustomer() {
        return customer;
    }

    public OrderBuilder setCustomer(Customer value) {
        customer = value;
        return this;
    }

    public Shipper getShipper() {
        return shipper;
    }

    public OrderBuilder setShipper(Shipper value) {
        shipper = value;
        return this;
    }

    public OrderTaxStatus getOrderTaxStatus() {
        return orderTaxStatus;
    }

    public OrderBuilder setOrderTaxStatus(OrderTaxStatus value) {
        orderTaxStatus = value;
        return this;
    }

    public OrderStatus getOrderStatus() {
        return orderStatus;
    }

    public OrderBuilder setOrderStatus(OrderStatus value) {
        orderStatus = value;
        return this;
    }

    public LocalDateTime getOrderDate() {
        return orderDate;
    }

    public OrderBuilder setOrderDate(LocalDateTime value) {
        orderDate = value;
        return this;
    }

    public LocalDateTime getShippedDate() {
        return shippedDate;
    }

    public OrderBuilder setShippedDate(LocalDateTime value) {
        shippedDate = value;
        return this;
    }

    public String getShipName() {
        return shipName;
    }

    public OrderBuilder setShipName(String value) {
        shipName = value;
        return this;
    }

    public String getShipAddress() {
        return shipAddress;
    }

    public OrderBuilder setShipAddress(String value) {
        shipAddress = value;
        return this;
    }

    public String getShipCity() {
        return shipCity;
    }

    public OrderBuilder setShipCity(String value) {
        shipCity = value;
        return this;
    }

    public String getShipProvince() {
        return shipProvince;
    }

    public OrderBuilder setShipProvince(String value) {
        shipProvince = value;
        return this;
    }

    public String getShipZipPostalCode() {
        return shipZipPostalCode;
    }

    public OrderBuilder setShipZipPostalCode(String value) {
        shipZipPostalCode = value;
        return this;
    }

    public String getShipCountryRegion() {
        return shipCountryRegion;
    }

    public OrderBuilder setShipCountryRegion(String value) {
        shipCountryRegion = value;
        return this;
    }

    public double getShippingFee() {
        return shippingFee;
    }

    public OrderBuilder setShippingFee(double value) {
        shippingFee = value;
        return this;
    }

    public double getTaxes() {
        return taxes;
    }

    public OrderBuilder setTaxes(double value) {
        taxes = value;
        return this;
    }

    public String getPaymentType() {
        return paymentType;
    }

    public OrderBuilder setPaymentType(String value) {
        paymentType = value;
        return this;
    }

    public LocalDateTime getPaidDate() {
        return paidDate;
    }

    public OrderBuilder setPaidDate(LocalDateTime value) {
        paidDate = value;
        return this;
    }

    public String getNotes() {
        return notes;
    }

    public OrderBuilder setNotes(String value) {
        notes = value;
        return this;
    }

    public double getTaxRate() {
        return taxRate;
    }

    public OrderBuilder setTaxRate(double value) {
        taxRate = value;
        return this;
    }
    //                  END OF ACCESSOR AND MUTATOR METHODS                   //

    @Override
    public String toString() {
        return "OrderBuilder[" +
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

    @Override
    public Order build() {
        return new Order(
            getId(),
            employee,
            customer,
            shipper,
            orderTaxStatus,
            orderStatus,
            orderDate,
            shippedDate,
            shipName,
            shipAddress,
            shipCity,
            shipProvince,
            shipZipPostalCode,
            shipCountryRegion,
            shippingFee,
            taxes,
            paymentType,
            paidDate,
            notes,
            taxRate
        );
    }

}
