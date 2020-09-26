/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model;

public class IdentifiableModel {

    private final int id;

    public IdentifiableModel(int id) {
        this.id = id;
    }

    public int getId() {
        return id;
    }

    @Override
    public String toString() {
        return "IdentifiableModel{" +
               "id=" + id +
               "}";
    }

}
