<!-- Facebook Field -->
<div class="form-group col-sm-6">
    <label for="facebook">Facebook</label>
    <input type="text" id="facebook" name="facebook" class="form-control"
        @if (!empty($userProfiles->facebook)) value="{{ old('name', $userProfiles->facebook) }}" @endif required><br>
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    <label for="twitter">Twitter</label>
    <input type="text" id="twitter" name="twitter" class="form-control"
        @if (!empty($userProfiles->twitter)) value="{{ old('name', $userProfiles->twitter) }}" @endif required><br>
</div>

<!-- Googleplus Field -->
<div class="form-group col-sm-6">
    <label for="googleplus">Googleplus</label>
    <input type="text" id="googleplus" name="googleplus" class="form-control"
        @if (!empty($userProfiles->googleplus)) value="{{ old('name', $userProfiles->googleplus) }}" @endif required><br>
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-6">
    <label for="linkedin">Linkedin</label>
    <input type="text" id="linkedin" name="linkedin" class="form-control"
        @if (!empty($userProfiles->linkedin)) value="{{ old('name', $userProfiles->linkedin) }}" @endif required><br>
</div>

<!-- About Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label for="about">About</label>
    <input type="text" id="about" name="about" class="form-control"
        @if (!empty($userProfiles->about)) value="{{ old('name', $userProfiles->about) }}" @endif required><br>
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    <label for="website">Website</label>
    <input type="text" id="website" name="website" class="form-control"
        @if (!empty($userProfiles->website)) value="{{ old('name', $userProfiles->website) }}" @endif required><br>
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="form-control"
        @if (!empty($userProfiles->phone)) value="{{ old('name', $userProfiles->phone) }}" @endif required><br>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
