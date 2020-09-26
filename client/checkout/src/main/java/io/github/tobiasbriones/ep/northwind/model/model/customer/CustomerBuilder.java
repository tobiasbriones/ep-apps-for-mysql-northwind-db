/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.customer;

// Notice that Customer and Employee and Supplier and Shipper are the exact same model ...
public final class CustomerBuilder {

    private final int id;
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

    public CustomerBuilder(int id) {
        this.id = id;
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

    public int getId() {
        return id;
    }

    public String getCompany() {
        return company;
    }

    public CustomerBuilder setCompany(String value) {
        company = value;
        return this;
    }

    public String getLastName() {
        return lastName;
    }

    public CustomerBuilder setLastName(String value) {
        lastName = value;
        return this;
    }

    public String getFirstName() {
        return firstName;
    }

    public CustomerBuilder setFirstName(String value) {
        firstName = value;
        return this;
    }

    public String getEmail() {
        return email;
    }

    public CustomerBuilder setEmail(String value) {
        email = value;
        return this;
    }

    public String getJobTitle() {
        return jobTitle;
    }

    public CustomerBuilder setJobTitle(String value) {
        jobTitle = value;
        return this;
    }

    public String getBusinessPhone() {
        return businessPhone;
    }

    public CustomerBuilder setBusinessPhone(String value) {
        businessPhone = value;
        return this;
    }

    public String getHomePhone() {
        return homePhone;
    }

    public CustomerBuilder setHomePhone(String value) {
        homePhone = value;
        return this;
    }

    public String getMobilePhone() {
        return mobilePhone;
    }

    public CustomerBuilder setMobilePhone(String value) {
        mobilePhone = value;
        return this;
    }

    public String getFaxNumber() {
        return faxNumber;
    }

    public CustomerBuilder setFaxNumber(String value) {
        faxNumber = value;
        return this;
    }

    public String getAddress() {
        return address;
    }

    public CustomerBuilder setAddress(String value) {
        address = value;
        return this;
    }

    public String getCity() {
        return city;
    }

    public CustomerBuilder setCity(String value) {
        city = value;
        return this;
    }

    public String getStateProvince() {
        return stateProvince;
    }

    public CustomerBuilder setStateProvince(String value) {
        stateProvince = value;
        return this;
    }

    public String getZipPostalCode() {
        return zipPostalCode;
    }

    public CustomerBuilder setZipPostalCode(String value) {
        zipPostalCode = value;
        return this;
    }

    public String getCountryRegion() {
        return countryRegion;
    }

    public CustomerBuilder setCountryRegion(String value) {
        countryRegion = value;
        return this;
    }

    public String getWebPage() {
        return webPage;
    }

    public CustomerBuilder setWebPage(String value) {
        webPage = value;
        return this;
    }

    public String getNotes() {
        return notes;
    }

    public CustomerBuilder setNotes(String value) {
        notes = value;
        return this;
    }

    public String getAttachments() {
        return attachments;
    }

    public CustomerBuilder setAttachments(String value) {
        attachments = value;
        return this;
    }
    //                  END OF ACCESSOR AND MUTATOR METHODS                   //

    @Override
    public String toString() {
        return "CustomerBuilder[" +
               "id=" + id + ", " +
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
               "]";
    }

    public Customer build() {
        return new Customer(
            id,
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
