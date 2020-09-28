/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
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
