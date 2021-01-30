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
 * Defines an abstract record builder for building {@link IdentifiableRecord}
 * records.
 *
 * @param <R> type of the record to build, extending {@link IdentifiableRecord}
 */
public abstract class AbstractBuilder<R extends IdentifiableRecord> {

    //                                                                        //
    //                                                                        //
    //                                 CLASS                                  //
    //                                                                        //
    //                                                                        //

    /**
     * Validates the id according to {@link IdentifiableRecord} rules.
     *
     * @param id id to validate
     *
     * @throws RuntimeException if the id is invalid
     */
    private static void validateId(int id) {
        if (!IdentifiableRecord.isValidId(id)) {
            final var msg = """
                            Invalid identifiable record id: %d
                            """.formatted(id);
            throw new RuntimeException(msg);
        }
    }

    //                                                                        //
    //                                                                        //
    //                                INSTANCE                                //
    //                                                                        //
    //                                                                        //

    private final int id;

    /**
     * Constructs a new Builder.
     *
     * @param id id of the record to build
     *
     * @throws RuntimeException if the given id is invalid
     */
    protected AbstractBuilder(int id) {
        validateId(id);
        this.id = id;
    }

    /**
     * Returns the given id value for building this record. If no id was given,
     * the default id is {@link IdentifiableRecord#NEW_RECORD_DEF_ID} for new
     * records.
     *
     * @return the given id value for building this record
     *
     * @see IdentifiableRecord
     */
    public final int getId() {
        return id;
    }

    @Override
    public String toString() {
        return "AbstractBuilder[" +
               "id=" + id + ", " +
               "]";
    }

    /**
     * Builds and returns the requested record.
     *
     * @return the requested record
     */
    public abstract R build();

}
