@extends('admin.layouts.template')
@section('page_title')
    Add Subcategory -ecom
@endsection
@section('content')
    <div class="container">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">page/</span> Add Sub Category </h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New SubCategory</h5>
                    <small class="text-muted float-end">Input information</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="sub_category_Name">Sub Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sub_category_Name" name="sub_category_Name"
                                    placeholder="Electronice" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="sub_category_Name">Select Category</label>
                            <div class="col-sm-10">
                                <select id="category" name="category" class="form-select form-select-lg">
                                    <option>Large select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add SubCategory</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
