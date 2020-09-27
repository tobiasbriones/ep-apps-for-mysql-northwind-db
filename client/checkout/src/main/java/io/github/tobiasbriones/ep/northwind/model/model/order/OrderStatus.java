/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.order;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableModel;

import java.util.Objects;

/**
 * Defines an OrderStatus for the Northwind's database model.
 */
public final class OrderStatus extends IdentifiableModel {

    private final String name;

    public OrderStatus(int id, String name) {
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
        final OrderStatus orderStatus = (OrderStatus) obj;
        return getId() == orderStatus.getId() &&
               Objects.equals(name, orderStatus.getName());
    }

    @Override
    public String toString() {
        return "OrderStatus[" +
               "name=" + name + ", " +
               "] " + super.toString();
    }

}
