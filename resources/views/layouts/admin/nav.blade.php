<div class="setting_nav">
                <div class="setting-titlebar">
                    <img src="../../template/assets/img/avatar.jpg" alt="" class="setting-avatar">
                    <p>Natalia Brakux</p>
                </div>
                <nav class="nav">
                    <div class="nav-setting-wrapper">
                        <div class="nav-list">
                            <ul class="nav-list-item-setting">
                                <li>
                                    <a aria-current="page" href="{{ url('admin/abouts') }}" class="{{ (request()->is('admin/abouts')) ? 'nav-active' : '' }}"
                                        class="router-link-active nav-active setting-link"><span><i
                                                class="fas fa-cog"></i></span><span>About Me</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-list-item-setting">
                                <li>
                                    <a aria-current="page" href="{{ url('admin/medias') }}" class="{{ (request()->is('admin/medias')) ? 'nav-active' : '' }}" class="setting-link"><span><i
                                                class="fas fa-cog"></i></span><span>My social media</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
