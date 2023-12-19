// example of model

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
