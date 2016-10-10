@include('partials.master-header')
 
    <div class="row top-buffer">

        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header">
			
                    <h3 class="box-title">Orders Made</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">

                        <tbody>
                        <tr>
                            <th>order name</th>
                            <th>line id</th>
                            <th class="text-right">qty</th>
                        </tr>
                            <tr>
                                <td></td>
								<td></td>
                                <td class="text-right"><span></span></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="alert alert-info col-md-4" style="margin-top: 15px;">
                    No users found.
                </div>
            </div>
        </div>
        <!-- Widget-1 end-->

    </div>
@include('partials.master-footer')
