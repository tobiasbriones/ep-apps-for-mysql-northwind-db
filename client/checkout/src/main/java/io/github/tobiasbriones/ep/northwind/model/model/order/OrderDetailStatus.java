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

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;

import java.util.Objects;

/**
 * Defines an OrderDetailStatus for the Northwind's database model.
 */
public final class OrderDetailStatus extends IdentifiableRecord {

    private final String name;

    public OrderDetailStatus(int id, String name) {
        super(id);
        this.name = name;
    }

    public String getName() {
        return name;
    }

    @Override
    public int hashCode() {
        //noinspection ObjectInstantiationInEqualsHashCode
        return Objects.hash(getId(), name);
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        final OrderDetailStatus orderDetailStatus = (OrderDetailStatus) obj;
        return getId() == orderDetailStatus.getId() &&
               Objects.equals(name, orderDetailStatus.getName());
    }

    @Override
    public String toString() {
        return "OrderDetailStatus[" +
               "name=" + name + ", " +
               "] " + super.toString();
    }

}
