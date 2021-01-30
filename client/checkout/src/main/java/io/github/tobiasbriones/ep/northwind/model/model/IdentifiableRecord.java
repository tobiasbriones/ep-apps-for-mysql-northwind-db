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

package io.github.tobiasbriones.ep.northwind.model.model;

/**
 * Defines a base class for the system records having a non-negative integer id.
 */
public class IdentifiableRecord {

    //                                                                        //
    //                                                                        //
    //                                 CLASS                                  //
    //                                                                        //
    //                                                                        //

    /**
     * Defines a constant for the id to assign to new records which don't have a
     * given id by the system (database) yet.
     */
    public static final int NEW_RECORD_DEF_ID = -1;

    /**
     * Returns {@code true} if and only if the given id is valid.
     *
     * @param id id to validate
     *
     * @return {@code true} if and only if the given id is valid
     */
    public static final boolean isValidId(int id) {
        return id >= 0 || id == NEW_RECORD_DEF_ID;
    }

    //                                                                        //
    //                                                                        //
    //                                INSTANCE                                //
    //                                                                        //
    //                                                                        //

    private final int id;

    /**
     * Creates an IdentifiableRecord with the specified id.
     *
     * @param id record's id. It must be a non-negative integer or
     *           {@link IdentifiableRecord#NEW_RECORD_DEF_ID} if this record
     *           doesn't have an id or is new
     *
     * @throws RuntimeException if the id value is invalid
     */
    public IdentifiableRecord(int id) {
        if (!isValidId(id)) {
            final var msg = "The id must be a non-negative integer";
            throw new RuntimeException(msg);
        }
        this.id = id;
    }

    /**
     * Returns this record's id. The id value is a non-negative integer. If this
     * record doesn't have an id because is new or is not registered in the
     * system or database then the id value is
     * {@link IdentifiableRecord#NEW_RECORD_DEF_ID}.
     *
     * @return this record's id
     */
    public final int getId() {
        return id;
    }

    @Override
    public String toString() {
        return "IdentifiableRecord[" +
               "id=" + id + ", " +
               "]";
    }

}
