/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.shipper;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableModel;

// Notice that Customer and Employee and Supplier and Shipper are the exact same
// model ...

/**
 * Defines a Shipper for the Northwind database model.
 */
public final class Shipper extends IdentifiableModel {

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

    Shipper(
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

}
