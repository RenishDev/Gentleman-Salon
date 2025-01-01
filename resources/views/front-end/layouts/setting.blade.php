<!-- Settings -->
<button class="settings">
    <i class="fas fa-cog fa-spin"></i>
</button>
<div class="setting-box">
    <div class="form-group">
        <label>Theme Color:</label>
        <ul>
            <li><a href="javascript:;" class="change-color peach" data-color="{{ asset('css/colors/color-peach.css') }}"></a></li>
            <li><a href="javascript:;" class="change-color purple" data-color="{{ asset('css/colors/color-purple.css') }}"></a></li>
            <li><a href="javascript:;" class="change-color pink" data-color="{{ asset('css/colors/color-pink.css') }}"></a></li>
            <li><a href="javascript:;" class="change-color green" data-color="{{ asset('css/colors/color-green.css') }}"></a></li>
            <li><a href="javascript:;" class="change-color biege" data-color="{{ asset('css/colors/color-biege.css') }}"></a></li>
            <li><a href="javascript:;" class="change-color red" data-color="{{ asset('css/colors/color-red.css') }}"></a></li>
        </ul>
    </div>
    {{-- <div class="form-group">
        <label>Header Style</label>
        <select class="form-control header-change">
            <option value="1" selected>Header Style 1</option>
            <option value="2">Header Style 2</option>
            <option value="3">Header Style 3</option>
        </select>
    </div> --}}
    <div class="form-group">
        <label>Sticky Header?</label>
        <select class="form-control header-sticky">
            <option value="yes">Yes</option>
            <option value="no" selected>No</option>
        </select>
    </div>
    <div class="form-group">
        <label>Footer Style</label>
        <select class="form-control footer-change">
            <option value="1" selected>Footer Style 1</option>
            <option value="2">Footer Style 2</option>
        </select>
    </div>
</div>
