<aside id="sidebar" class="sidebar bg-gray-50 shadow-lg border-r border-gray-200 ">
    <div class="flex items-center justify-between p-3 border-b border-gray-200">
        <span class="sidebar-text text-sm font-semibold text-gray-800">School</span>
        <button id="toggleBtn" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
            <i class="fas fa-bars text-sm text-gray-500"></i>
        </button>
    </div>

    <nav class="p-2 space-y-1">
        <!-- Users Management -->
        <div class="menu-section">
            <button class="menu-toggle w-full flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-users text-sm w-5 flex-shrink-0 text-gray-500"></i>
                <span class="sidebar-text text-xs flex-1 text-left text-gray-800">Users Management</span>
                <i class="fas fa-chevron-down chevron-icon text-xs ml-auto text-gray-500"></i>
            </button>
            <div class="menu-item-content collapsed">
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Add User</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Edit User</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Delete User</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">View Users</span>
                </a>
            </div>
        </div>

        <!-- Admission -->
        <div class="menu-section">
            <button class="menu-toggle w-full flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-graduation-cap text-sm w-5 flex-shrink-0 text-gray-500"></i>
                <span class="sidebar-text text-xs flex-1 text-left text-gray-800">Admission</span>
                <i class="fas fa-chevron-down chevron-icon text-xs ml-auto text-gray-500"></i>
            </button>
            <div class="menu-item-content collapsed">
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">New Admission</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Pending Applications</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Approved</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Rejected</span>
                </a>
            </div>
        </div>

        <!-- Subjects -->
        <div class="menu-section">
            <button class="menu-toggle w-full flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-book text-sm w-5 flex-shrink-0 text-gray-500"></i>
                <span class="sidebar-text text-xs flex-1 text-left text-gray-800">Subjects</span>
                <i class="fas fa-chevron-down chevron-icon text-xs ml-auto text-gray-500"></i>
            </button>
            <div class="menu-item-content collapsed">
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">All Subjects</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Add Subject</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Subject Groups</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Manage Courses</span>
                </a>
            </div>
        </div>

        <!-- Results -->
        <div class="menu-section">
            <button class="menu-toggle w-full flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-chart-bar text-sm w-5 flex-shrink-0 text-gray-500"></i>
                <span class="sidebar-text text-xs flex-1 text-left text-gray-800">Results</span>
                <i class="fas fa-chevron-down chevron-icon text-xs ml-auto text-gray-500"></i>
            </button>
            <div class="menu-item-content collapsed">
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">View Results</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Upload Results</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Grade Sheet</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-6 py-2 text-xs hover:bg-gray-100 transition-colors rounded-lg mx-1 text-gray-700">
                    <i class="fas fa-circle text-[0.375rem] w-5 flex-shrink-0 text-gray-500"></i>
                    <span class="sidebar-text">Performance Report</span>
                </a>
            </div>
        </div>
    </nav>
</aside>