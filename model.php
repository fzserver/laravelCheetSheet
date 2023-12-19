    /*
        These functions are defined by :: Abhijeet Kumar 14-12-2023 
        To get the accomodation, accomodation category data and also here is defined to map the data from compitable with table.
        here,
        accom_category  = category or hotel_category :: this data is in accom_category table
        compatible_with = sub_category or hotel_sub_category :: this data is in compatible with table and this is mapped using compatible_with id
    */

    // for accommodation name
    public function getAccomName() {
        return $this->belongsTo(AccomModel::class, 'accom_id_fk', 'id');
    }

    // for accommodation category name
    public function getAccomCatName() {
        return $this->belongsTo(AccomCatModel::class, 'accom_cat_id_fk', 'id');
    }

    // This function help to get the name of accomodation category on the basic of compatible_with which is accom_category sub_category
    public function compatibleWithName() {
        return $this->hasMany(CompatibleWithModel::class, 'accom_cat_id', 'accom_cat_id_fk')
            ->leftJoin('accom_cat', 'compatible_with.compatible_with', '=', 'accom_cat.id')
            ->select('accom_cat.accom_cat_name as accom_sub_cat_name');
    }
