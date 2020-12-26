<div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
        <thead>
        <tr class="headings">
            <th class="column-title">#</th>
            <th class="column-title">Username</th>
            <th class="column-title">Email</th>
            <th class="column-title">Fullname</th>
            <th class="column-title">Avatar</th>
            <th class="column-title">Trạng thái</th>
            <th class="column-title">Level</th>
            <th class="column-title">Tạo mới</th>
            <th class="column-title">Chỉnh sửa</th>
            <th class="column-title">Hành động</th>
        </tr>
        </thead>
        <tbody>
        <tr class="odd pointer">
            @foreach ($list_book as $key =>$value)

            <td class=""> {{$value['book_id']}}</td>
            <td width="10%">{{$value['book_name']}}</td>
            <td>member@gmail.com</td>
            <td>member</td>
            <td width="5%"><img src="{{asset('admin/img/user.png')}}"
                                alt="hailan" class="zvn-thumb"  ></td>
            <td><a href="/change-status-active/2"
                type="button" class="btn btn-round btn-success">Active</a></td>
            <td width="10%">
                <select name="select_change_attr" class="form-control"
                        data-url="/change-level-value_new/2">
                    <option value="admin">Admin</option>
                    <option value="member" selected="selected">Member</option>
                </select>
            </td>
            <td>
                <p><i class="fa fa-user"></i> admin</p>
                <p><i class="fa fa-clock-o"></i> 13/12/2014</p>
            </td>
            <td>
                <p><i class="fa fa-user"></i> hailan</p>
                <p><i class="fa fa-clock-o"></i> 13/12/2014</p>
            </td>
            <td class="last">
                <div class="zvn-box-btn-filter"><a
                        href="/form/2"
                        type="button" class="btn btn-icon btn-success" data-toggle="tooltip"
                        data-placement="top" data-original-title="Edit">
                    <i class="fa fa-pencil"></i>
                </a><a href="/delete/2"
                    type="button" class="btn btn-icon btn-danger btn-delete"
                    data-toggle="tooltip" data-placement="top"
                    data-original-title="Delete">
                    <i class="fa fa-trash"></i>
                </a>
                </div>
            </td>
        </tr>
        
        @endforeach
        </tbody>
    </table>
    
</div>