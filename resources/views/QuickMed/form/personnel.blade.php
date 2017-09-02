
    <fieldset>
        <legend class="text-center"> Membership Form</legend>
        

<form role="form" method="post" action="/register">
                {{ csrf_field() }}
            <div class="form-group">
                    <label role="name" class="control-label">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>

                <div class="form-group">
                <label role="profession" class="control-label">Profession</label>
                <select name="profession" class="form-control">
                    <option>Medical Doctor</option>
                    <option>Nurse</option>
                    <option>Midwife</option>
                    <option>Physician Assistant</option>
                </select>
                </div>

                <div class="form-group">
                    <label role="license_number" class="control-label">License Number</label>
                    <input type="text" name="license" class="form-control">
                </div>

                <div class="form-group">
                    <label role="phone_number" class="control-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <label role="location" class="control-label">Location</label>
                    <input type="text" name="location" class="form-control">
                </div>
            <button type="submit" class="btn btn-block btn-success">Register</button>
        </form>

        </fieldset>
