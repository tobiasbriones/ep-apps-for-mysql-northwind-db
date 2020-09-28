/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

package io.github.tobiasbriones.ep.northwind.model.model.product;

import io.github.tobiasbriones.ep.northwind.model.model.IdentifiableRecord;

public final class Product extends IdentifiableRecord {

    private final String code;
    private final String name;
    private final String description;
    private final double standardCost;
    private final double listPrice;
    private final int reorderLevel;
    private final int targetLevel;
    private final String quantityPerUnit;
    private final boolean discontinued;
    private final int minimumReorderQuantity;
    private final String category;
    private final String attachments;
    private final String supplierIds;

    Product(
        int id,
        String code,
        String name,
        String description,
        double standardCost,
        double listPrice,
        int reorderLevel,
        int targetLevel,
        String quantityPerUnit,
        boolean discontinued,
        int minimumReorderQuantity,
        String category,
        String attachments,
        String supplierIds
    ) {
        super(id);
        this.code = code;
        this.name = name;
        this.description = description;
        this.standardCost = standardCost;
        this.listPrice = listPrice;
        this.reorderLevel = reorderLevel;
        this.targetLevel = targetLevel;
        this.quantityPerUnit = quantityPerUnit;
        this.discontinued = discontinued;
        this.minimumReorderQuantity = minimumReorderQuantity;
        this.category = category;
        this.attachments = attachments;
        this.supplierIds = supplierIds;
    }

    public String getCode() {
        return code;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public double getStandardCost() {
        return standardCost;
    }

    public double getListPrice() {
        return listPrice;
    }

    public int getReorderLevel() {
        return reorderLevel;
    }

    public int getTargetLevel() {
        return targetLevel;
    }

    public String getQuantityPerUnit() {
        return quantityPerUnit;
    }

    public boolean isDiscontinued() {
        return discontinued;
    }

    public int getMinimumReorderQuantity() {
        return minimumReorderQuantity;
    }

    public String getCategory() {
        return category;
    }

    public String getAttachments() {
        return attachments;
    }

    public String getSupplierIds() {
        return supplierIds;
    }

    @Override
    public String toString() {
        return "Product[" +
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

}
