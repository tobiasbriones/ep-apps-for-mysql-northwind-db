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

package io.github.tobiasbriones.ep.northwind.model.model.product;

import io.github.tobiasbriones.ep.northwind.model.model.AbstractBuilder;

public final class ProductBuilder extends AbstractBuilder<Product> {

    private String code;
    private String name;
    private String description;
    private double standardCost;
    private double listPrice;
    private int reorderLevel;
    private int targetLevel;
    private String quantityPerUnit;
    private boolean discontinued;
    private int minimumReorderQuantity;
    private String category;
    private String attachments;
    private String supplierIds;

    public ProductBuilder(int id) {
        super(id);
        code = "";
        name = "";
        description = "";
        standardCost = 0.0d;
        listPrice = 0.0d;
        reorderLevel = 0;
        targetLevel = 0;
        quantityPerUnit = "";
        discontinued = false;
        minimumReorderQuantity = 0;
        category = "";
        attachments = "";
        supplierIds = "";
    }

    //                                                                        //
    //                      ACCESSOR AND MUTATOR METHODS                      //
    //                                                                        //

    public String getCode() {
        return code;
    }

    public ProductBuilder setCode(String value) {
        code = value;
        return this;
    }

    public String getName() {
        return name;
    }

    public ProductBuilder setName(String value) {
        name = value;
        return this;
    }

    public String getDescription() {
        return description;
    }

    public ProductBuilder setDescription(String value) {
        description = value;
        return this;
    }

    public double getStandardCost() {
        return standardCost;
    }

    public ProductBuilder setStandardCost(double value) {
        standardCost = value;
        return this;
    }

    public double getListPrice() {
        return listPrice;
    }

    public ProductBuilder setListPrice(double value) {
        listPrice = value;
        return this;
    }

    public int getReorderLevel() {
        return reorderLevel;
    }

    public ProductBuilder setReorderLevel(int value) {
        reorderLevel = value;
        return this;
    }

    public int getTargetLevel() {
        return targetLevel;
    }

    public ProductBuilder setTargetLevel(int value) {
        targetLevel = value;
        return this;
    }

    public String getQuantityPerUnit() {
        return quantityPerUnit;
    }

    public ProductBuilder setQuantityPerUnit(String value) {
        quantityPerUnit = value;
        return this;
    }

    public boolean isDiscontinued() {
        return discontinued;
    }

    public ProductBuilder setDiscontinued(boolean value) {
        discontinued = value;
        return this;
    }

    public int getMinimumReorderQuantity() {
        return minimumReorderQuantity;
    }

    public ProductBuilder setMinimumReorderQuantity(int value) {
        minimumReorderQuantity = value;
        return this;
    }

    public String getCategory() {
        return category;
    }

    public ProductBuilder setCategory(String value) {
        category = value;
        return this;
    }

    public String getAttachments() {
        return attachments;
    }

    public ProductBuilder setAttachments(String value) {
        attachments = value;
        return this;
    }

    public String getSupplierIds() {
        return supplierIds;
    }

    public ProductBuilder setSupplierIds(String value) {
        supplierIds = value;
        return this;
    }
    //                  END OF ACCESSOR AND MUTATOR METHODS                   //

    @Override
    public String toString() {
        return "ProductBuilder[" +
               "code=" + code + ", " +
               "name=" + name + ", " +
               "description=" + description + ", " +
               "standardCost=" + standardCost + ", " +
               "listPrice=" + listPrice + ", " +
               "reorderLevel=" + reorderLevel + ", " +
               "targetLevel=" + targetLevel + ", " +
               "quantityPerUnit=" + quantityPerUnit + ", " +
               "discontinued=" + discontinued + ", " +
               "minimumReorderQuantity=" + minimumReorderQuantity + ", " +
               "category=" + category + ", " +
               "attachments=" + attachments + ", " +
               "supplierIds=" + supplierIds + ", " +
               "] " + super.toString();
    }

    @Override
    public Product build() {
        return new Product(
            getId(),
            code,
            name,
            description,
            standardCost,
            listPrice,
            reorderLevel,
            targetLevel,
            quantityPerUnit,
            discontinued,
            minimumReorderQuantity,
            category,
            attachments,
            supplierIds
        );
    }

}
