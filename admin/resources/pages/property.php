<div class="content">
    <div id="all-properties" >
        <div class="row">
            <div class="col-lg-12">
                <div class="card pb-2">
                    <div class="card-header">
                        <h3 class="p-0 m-0">All Properties |<span class="card-title text-primary"> 763,215</span> <span class="float-right"><button type="button" class="btn-sm btn-success" id="add-property-trigger">Add</button></span></h3>
                    </div>
                    <div class="card-boady p-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Property ID</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th style="width:200px">Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#jds343</td>
                                        <td>Property 01</td>
                                        <td><button class="btn-sm btn-success m-1">View on map</button></td>
                                        <td><span class="text-success" style="cursor:pointer">View Description</span></td>
                                        <td>
                                            <a href="#" class="btn-sm btn-danger m-1">Delete</a>
                                            <a href="#" class="btn-sm btn-info m-1">Edit</a>
                                            <a href="#" class="btn-sm btn-info m-1">Preview</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="add-property"  style="display:none">
        <div class="row">
            <div class="col-lg-12">
                <div class="card pb-2">
                    <div class="card-header">
                        <h3 class="p-0 m-0">Add Property <span class="float-right"><button type="button" class="btn-sm btn-success" id="show-properties-div">View All</button></span></h3>
                    </div>
                    <div class="card-boady p-4">
                        <div class="form-outer">
                            <div class="step-form">
                                <div class="form">
                                    <form action="#">
                                        <div class="step-content mt-5">
                                            <!-- Step 00 -->
                                            <div class="form-heading mt-2">
                                                <h5>Basic Information</h5>
                                            </div>
                                            <div class="step-div step-0 active">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Property Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" id="property-images" style="display:none">
                                                            <label for="property-images" class="form-control">Select Images</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Property Type</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Property Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea name="" id="" cols="30" rows="15" class="form-control" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Step 01 -->
                                            <hr>
                                            <div class="form-heading mt-2">
                                                <h5>Area</h5>
                                            </div>
                                            <div class="step-div step-1">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Area (sq.ft)">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Bath Rooms">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Bed Rooms" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-heading mt-2">
                                                <h5>Map Address</h5>
                                            </div>
                                            <div class="step-div step-1">
                                                <div class="row">
                                                    <div class="col-12 mt-2 mb-2"><button type="button" class="btn-sm btn-success">Open Map</button></div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Street" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="City" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="State" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Zipcode" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea name="" id="" cols="30" rows="15" class="form-control" placeholder="Address" disabled></textarea>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <button class="btn btn-success w-100">Add Property</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>