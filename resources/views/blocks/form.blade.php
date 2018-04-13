<div class="row">
    <div class="col-md-12">
        <form action="{{ route('form') }}" class="form-horizontal" method="post">
            {{csrf_field()}}
            <div class="personal-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="first_name" class="control-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="last_name" class="control-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="control-label">Password confirmation</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>

                @if($errors->any())
                    <div class="row">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                @endif

                @if (\Session::has('message'))
                    <div class="alert alert-success">{{ \Session::get('message') }}</div>
                @endif
                
            </div>
            <div class="form-gorup">
                <button type="submit" class="btn btn-default">Send</button>
            </div>
        </form>
    </div>
</div>