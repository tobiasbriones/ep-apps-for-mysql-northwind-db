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

package io.github.tobiasbriones.ep.northwind.model.model.shipper;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;

import java.util.Objects;

// Notice that Customer and Employee and Supplier and Shipper are the exact same
// model ...

/**
 * Defines a Shipper for the Northwind database model.
 */
public final class Shipper extends IdentifiableRecord {

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
        final Shipper shipper = (Shipper) obj;
        return isEqualsTo(shipper);
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

    private boolean checkEqualsPart1(Shipper shipper) {
        return Objects.equals(company, shipper.getCompany()) &&
               Objects.equals(lastName, shipper.getLastName()) &&
               Objects.equals(firstName, shipper.getFirstName()) &&
               Objects.equals(email, shipper.getEmail());
    }

    private boolean checkEqualsPart2(Shipper shipper) {
        return Objects.equals(jobTitle, shipper.getJobTitle()) &&
               Objects.equals(businessPhone, shipper.getBusinessPhone()) &&
               Objects.equals(homePhone, shipper.getHomePhone()) &&
               Objects.equals(mobilePhone, shipper.getMobilePhone()) &&
               Objects.equals(faxNumber, shipper.getFaxNumber());
    }

    private boolean checkEqualsPart3(Shipper shipper) {
        return Objects.equals(address, shipper.getAddress()) &&
               Objects.equals(city, shipper.getCity()) &&
               Objects.equals(stateProvince, shipper.getStateProvince()) &&
               Objects.equals(zipPostalCode, shipper.getZipPostalCode()) &&
               Objects.equals(countryRegion, shipper.getCountryRegion()) &&
               Objects.equals(webPage, shipper.getWebPage()) &&
               Objects.equals(notes, shipper.getNotes()) &&
               Objects.equals(attachments, shipper.getAttachments());
    }

    private boolean isEqualsTo(Shipper shipper) {
        // Create several methods for reducing the cyclomatic complexity
        return getId() == shipper.getId() &&
               checkEqualsPart1(shipper) &&
               checkEqualsPart2(shipper) &&
               checkEqualsPart3(shipper);
    }

}
