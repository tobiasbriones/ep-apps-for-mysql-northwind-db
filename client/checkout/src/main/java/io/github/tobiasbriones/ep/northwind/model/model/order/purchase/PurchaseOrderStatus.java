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

package io.github.tobiasbriones.ep.northwind.model.model.order.purchase;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;

import java.util.Objects;

public final class PurchaseOrderStatus extends IdentifiableRecord {

    private final String status;

    public PurchaseOrderStatus(int id, String status) {
        super(id);
        this.status = status;
    }

    public String getStatus() {
        return status;
    }

    @Override
    public int hashCode() {
        //noinspection ObjectInstantiationInEqualsHashCode
        return Objects.hash(getId(), status);
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        final PurchaseOrderStatus purchaseOrderStatus = (PurchaseOrderStatus) obj;
        return getId() == purchaseOrderStatus.getId() &&
               Objects.equals(status, purchaseOrderStatus.status);
    }

    @Override
    public String toString() {
        return "PurchaseOrderStatus[" +
               "status=" + status + ", " +
               "] " + super.toString();
    }

}
