/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.supplier;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;

import java.util.Objects;

// Notice that Customer and Employee and Supplier and Shipper are the exact same
// model ...

/**
 * Defines a Supplier for the Northwind database model.
 */
public final class Supplier extends IdentifiableRecord {

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

    Supplier(
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
        final Supplier supplier = (Supplier) obj;
        return isEqualsTo(supplier);
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

    private boolean checkEqualsPart1(Supplier supplier) {
        return Objects.equals(company, supplier.getCompany()) &&
               Objects.equals(lastName, supplier.getLastName()) &&
               Objects.equals(firstName, supplier.getFirstName()) &&
               Objects.equals(email, supplier.getEmail());
    }

    private boolean checkEqualsPart2(Supplier supplier) {
        return Objects.equals(jobTitle, supplier.getJobTitle()) &&
               Objects.equals(businessPhone, supplier.getBusinessPhone()) &&
               Objects.equals(homePhone, supplier.getHomePhone()) &&
               Objects.equals(mobilePhone, supplier.getMobilePhone()) &&
               Objects.equals(faxNumber, supplier.getFaxNumber());
    }

    private boolean checkEqualsPart3(Supplier supplier) {
        return Objects.equals(address, supplier.getAddress()) &&
               Objects.equals(city, supplier.getCity()) &&
               Objects.equals(stateProvince, supplier.getStateProvince()) &&
               Objects.equals(zipPostalCode, supplier.getZipPostalCode()) &&
               Objects.equals(countryRegion, supplier.getCountryRegion()) &&
               Objects.equals(webPage, supplier.getWebPage()) &&
               Objects.equals(notes, supplier.getNotes()) &&
               Objects.equals(attachments, supplier.getAttachments());
    }

    private boolean isEqualsTo(Supplier supplier) {
        // Create several methods for reducing the cyclomatic complexity
        return getId() == supplier.getId() &&
               checkEqualsPart1(supplier) &&
               checkEqualsPart2(supplier) &&
               checkEqualsPart3(supplier);
    }

}
