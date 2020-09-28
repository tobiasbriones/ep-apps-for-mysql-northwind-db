/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.employee;

// Notice that Customer and Employee and Supplier and Shipper are the exact same
// model ...

import io.github.tobiasbriones.ep.northwind.model.model.AbstractBuilder;

/**
 * Defines an EmployeeBuilder pattern for the {@link Employee} model.
 */
public final class EmployeeBuilder extends AbstractBuilder<Employee> {

    private String company;
    private String lastName;
    private String firstName;
    private String email;
    private String jobTitle;
    private String businessPhone;
    private String homePhone;
    private String mobilePhone;
    private String faxNumber;
    private String address;
    private String city;
    private String stateProvince;
    private String zipPostalCode;
    private String countryRegion;
    private String webPage;
    private String notes;
    private String attachments;

    public EmployeeBuilder(int id) {
        super(id);
        company = "";
        lastName = "";
        firstName = "";
        email = "";
        jobTitle = "";
        businessPhone = "";
        homePhone = "";
        mobilePhone = "";
        faxNumber = "";
        address = "";
        city = "";
        stateProvince = "";
        zipPostalCode = "";
        countryRegion = "";
        webPage = "";
        notes = "";
        attachments = "";
    }

    //                                                                        //
    //                      ACCESSOR AND MUTATOR METHODS                      //
    //                                                                        //

    public String getCompany() {
        return company;
    }

    public EmployeeBuilder setCompany(String value) {
        company = value;
        return this;
    }

    public String getLastName() {
        return lastName;
    }

    public EmployeeBuilder setLastName(String value) {
        lastName = value;
        return this;
    }

    public String getFirstName() {
        return firstName;
    }

    public EmployeeBuilder setFirstName(String value) {
        firstName = value;
        return this;
    }

    public String getEmail() {
        return email;
    }

    public EmployeeBuilder setEmail(String value) {
        email = value;
        return this;
    }

    public String getJobTitle() {
        return jobTitle;
    }

    public EmployeeBuilder setJobTitle(String value) {
        jobTitle = value;
        return this;
    }

    public String getBusinessPhone() {
        return businessPhone;
    }

    public EmployeeBuilder setBusinessPhone(String value) {
        businessPhone = value;
        return this;
    }

    public String getHomePhone() {
        return homePhone;
    }

    public EmployeeBuilder setHomePhone(String value) {
        homePhone = value;
        return this;
    }

    public String getMobilePhone() {
        return mobilePhone;
    }

    public EmployeeBuilder setMobilePhone(String value) {
        mobilePhone = value;
        return this;
    }

    public String getFaxNumber() {
        return faxNumber;
    }

    public EmployeeBuilder setFaxNumber(String value) {
        faxNumber = value;
        return this;
    }

    public String getAddress() {
        return address;
    }

    public EmployeeBuilder setAddress(String value) {
        address = value;
        return this;
    }

    public String getCity() {
        return city;
    }

    public EmployeeBuilder setCity(String value) {
        city = value;
        return this;
    }

    public String getStateProvince() {
        return stateProvince;
    }

    public EmployeeBuilder setStateProvince(String value) {
        stateProvince = value;
        return this;
    }

    public String getZipPostalCode() {
        return zipPostalCode;
    }

    public EmployeeBuilder setZipPostalCode(String value) {
        zipPostalCode = value;
        return this;
    }

    public String getCountryRegion() {
        return countryRegion;
    }

    public EmployeeBuilder setCountryRegion(String value) {
        countryRegion = value;
        return this;
    }

    public String getWebPage() {
        return webPage;
    }

    public EmployeeBuilder setWebPage(String value) {
        webPage = value;
        return this;
    }

    public String getNotes() {
        return notes;
    }

    public EmployeeBuilder setNotes(String value) {
        notes = value;
        return this;
    }

    public String getAttachments() {
        return attachments;
    }

    public EmployeeBuilder setAttachments(String value) {
        attachments = value;
        return this;
    }
    //                  END OF ACCESSOR AND MUTATOR METHODS                   //

    @Override
    public String toString() {
        return "EmployeeBuilder[" +
               "company=" + company + ", " +
               "lastName=" + lastName + ", " +
               "firstName=" + firstName + ", " +
               "email=" + email + ", " +
               "jobTitle=" + jobTitle + ", " +
               "businessPhone=" + businessPhone + ", " +
               "homePhone=" + homePhone + ", " +
               "mobilePhone=" + mobilePhone + ", " +
               "faxNumber=" + faxNumber + ", " +
               "address=" + address + ", " +
               "city=" + city + ", " +
               "stateProvince=" + stateProvince + ", " +
               "zipPostalCode=" + zipPostalCode + ", " +
               "countryRegion=" + countryRegion + ", " +
               "webPage=" + webPage + ", " +
               "notes=" + notes + ", " +
               "attachments=" + attachments + ", " +
               "] " + super.toString();
    }

    @Override
    public Employee build() {
        return new Employee(
            getId(),
            company,
            lastName,
            firstName,
            email,
            jobTitle,
            businessPhone,
            homePhone,
            mobilePhone,
            faxNumber,
            address,
            city,
            stateProvince,
            zipPostalCode,
            countryRegion,
            webPage,
            notes,
            attachments
        );
    }

}
