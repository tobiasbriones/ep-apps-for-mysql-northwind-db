/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.customer;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;

import java.util.Objects;

// Notice that Customer and Employee and Supplier and Shipper are the exact same
// model ...

/**
 * Defines a Customer for the Northwind database model.
 */
public final class Customer extends IdentifiableRecord {

    private final String company;
    private final String lastName;
    private final String firstName;
    private final String email;
    private final String jobTitle;
    private final String businessPhone;
    private final String homePhone;
    private final String mobilePhone;
    private final String faxNumber;
    private final String address;
    private final String city;
    private final String stateProvince;
    private final String zipPostalCode;
    private final String countryRegion;
    private final String webPage;
    private final String notes;
    private final String attachments;

    Customer(
        int id,
        String company,
        String lastName,
        String firstName,
        String email,
        String jobTitle,
        String businessPhone,
        String homePhone,
        String mobilePhone,
        String faxNumber,
        String address,
        String city,
        String stateProvince,
        String zipPostalCode,
        String countryRegion,
        String webPage,
        String notes,
        String attachments
    ) {
        super(id);
        this.company = company;
        this.lastName = lastName;
        this.firstName = firstName;
        this.email = email;
        this.jobTitle = jobTitle;
        this.businessPhone = businessPhone;
        this.homePhone = homePhone;
        this.mobilePhone = mobilePhone;
        this.faxNumber = faxNumber;
        this.address = address;
        this.city = city;
        this.stateProvince = stateProvince;
        this.zipPostalCode = zipPostalCode;
        this.countryRegion = countryRegion;
        this.webPage = webPage;
        this.notes = notes;
        this.attachments = attachments;
    }

    public String getCompany() {
        return company;
    }

    public String getLastName() {
        return lastName;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getEmail() {
        return email;
    }

    public String getJobTitle() {
        return jobTitle;
    }

    public String getBusinessPhone() {
        return businessPhone;
    }

    public String getHomePhone() {
        return homePhone;
    }

    public String getMobilePhone() {
        return mobilePhone;
    }

    public String getFaxNumber() {
        return faxNumber;
    }

    public String getAddress() {
        return address;
    }

    public String getCity() {
        return city;
    }

    public String getStateProvince() {
        return stateProvince;
    }

    public String getZipPostalCode() {
        return zipPostalCode;
    }

    public String getCountryRegion() {
        return countryRegion;
    }

    public String getWebPage() {
        return webPage;
    }

    public String getNotes() {
        return notes;
    }

    public String getAttachments() {
        return attachments;
    }

    @Override
    public int hashCode() {
        //noinspection ObjectInstantiationInEqualsHashCode
        return Objects.hash(
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

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        final Customer customer = (Customer) obj;
        return isEqualsTo(customer);
    }

    @Override
    public String toString() {
        return "Customer[" +
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

    private boolean checkEqualsPart1(Customer customer) {
        return Objects.equals(company, customer.getCompany()) &&
               Objects.equals(lastName, customer.getLastName()) &&
               Objects.equals(firstName, customer.getFirstName()) &&
               Objects.equals(email, customer.getEmail());
    }

    private boolean checkEqualsPart2(Customer customer) {
        return Objects.equals(jobTitle, customer.getJobTitle()) &&
               Objects.equals(businessPhone, customer.getBusinessPhone()) &&
               Objects.equals(homePhone, customer.getHomePhone()) &&
               Objects.equals(mobilePhone, customer.getMobilePhone()) &&
               Objects.equals(faxNumber, customer.getFaxNumber());
    }

    private boolean checkEqualsPart3(Customer customer) {
        return Objects.equals(address, customer.getAddress()) &&
               Objects.equals(city, customer.getCity()) &&
               Objects.equals(stateProvince, customer.getStateProvince()) &&
               Objects.equals(zipPostalCode, customer.getZipPostalCode()) &&
               Objects.equals(countryRegion, customer.getCountryRegion()) &&
               Objects.equals(webPage, customer.getWebPage()) &&
               Objects.equals(notes, customer.getNotes()) &&
               Objects.equals(attachments, customer.getAttachments());
    }

    private boolean isEqualsTo(Customer customer) {
        // Create several methods for reducing the cyclomatic complexity
        return getId() == customer.getId() &&
               checkEqualsPart1(customer) &&
               checkEqualsPart2(customer) &&
               checkEqualsPart3(customer);
    }

}
