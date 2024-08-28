<div>
    <div class="row">
        <div class="col-12">
            <div class="tp-dashboard-tab mb-25">
            <h2 class="tp-dashboard-tab-title">Settings</h2>
            <div class="tp-dashboard-tab-list">
                @if(Route::is('student*'))
                    <ul>
                        <li>
                            <a class="{{ request()->is('student-setting-profile') ? 'active':'' }}" href="{{route('student-setting-profile')}}" wire:navigate>Profile</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('student-password-setting') ? 'active':'' }}" href="{{ route('student-password-setting')}}" wire:navigate>Password</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('student-social-profile-setting') ? 'active':'' }}" href="{{ route('student-social-profile-setting')}}" wire:navigate>Social Profile</a>
                        </li>
                    </ul>
                @endif
                @if(Route::is('institute*'))
                    <ul>
                        <li>
                            <a class="{{ request()->is('institute.profile-setting') ? 'active':'' }}" href="{{route('institute.profile-setting')}}" wire:navigate>Profile</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('institute.password-setting') ? 'active':'' }}" href="{{ route('institute.password-setting')}}" wire:navigate>Password</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('institute.social-account-setting') ? 'active':'' }}" href="{{ route('institute.social-account-setting')}}" wire:navigate>Social Profile</a>
                        </li>
                    </ul>
                @endif
            </div>
            </div>
        </div>
    </div>
</div>
