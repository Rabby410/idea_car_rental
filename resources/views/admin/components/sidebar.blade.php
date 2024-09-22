<div class="sidebar border-top border-right" id="sidebar">
    <h3 class="text-center p-4 text-xl font-bold">Menu</h3>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/cars*') ? 'active' : '' }}" href="{{ route('admin.cars.index') }}">
                Manage Cars
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/rentals*') ? 'active' : '' }}" href="{{ route('admin.rentals.index') }}">
                Manage Rentals
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/customers*') ? 'active' : '' }}" href="{{ route('admin.customers.index') }}">
                Manage Customers
            </a>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        min-height: 100vh; /* Full height for the sidebar */
    }

    .nav-link {
        position: relative;
        padding: 10px 20px;
        transition: background-color 0.3s, color 0.3s;
    }

    .nav-link:hover {
        background-color: #e9ecef; /* Light hover effect */
        color: #007bff; /* Change text color on hover */
    }

    .nav-link.active {
        background-color: #007bff; /* Active link background */
        color: white; /* Active link text color */
        border-left: 4px solid white; /* Left border for active link */
    }
</style>
