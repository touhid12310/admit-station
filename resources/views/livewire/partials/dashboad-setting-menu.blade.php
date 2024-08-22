<div>
    <div class="row">
        <div class="col-12">
            <div class="tp-dashboard-tab mb-25">
            <h2 class="tp-dashboard-tab-title">Settings</h2>
            <div class="tp-dashboard-tab-list">
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
            </div>
            </div>
        </div>
    </div>
</div>
