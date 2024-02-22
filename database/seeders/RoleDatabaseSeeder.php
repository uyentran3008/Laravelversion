<?php

namespace Database\Seeders;

use App\Models\Permisson;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'super-admin', 'display_name' => 'Super Admin', 'group' => 'system'],
            ['name' => 'admin', 'display_name' => 'Admin', 'group' => 'system'],
            ['name' => 'employee', 'display_name' => 'employee', 'group' => 'system'],
            ['name' => 'manager', 'display_name' => 'manager', 'group' => 'system'],
            ['name' => 'user', 'display_name' => 'user', 'group' => 'system'],

        ];
        
        foreach($roles as $role){
            Role::updateOrCreate($role);
        }

        $permissions = [
            ['name' => 'create-user', 'display_name' => 'Tạo mới người dùng', 'group' => 'Người dùng'],
            ['name' => 'update-user', 'display_name' => 'Cập nhật người dùng', 'group' => 'Người dùng'],
            ['name' => 'show-user', 'display_name' => 'Hiển thị người dùng', 'group' => 'Người dùng'],
            ['name' => 'delete-user', 'display_name' => 'Xóa người dùng', 'group' => 'Người dùng'],

            ['name' => 'create-role', 'display_name' => 'Tạo mới vai trò', 'group' => 'Vai trò'],
            ['name' => 'update-role', 'display_name' => 'Cập nhật vai trò', 'group' => 'Vai trò'],
            ['name' => 'show-role', 'display_name' => 'Hiển thị vai trò', 'group' => 'Vai trò'],
            ['name' => 'delete-role', 'display_name' => 'Xóa vai trò', 'group' => 'Vai trò'],

            ['name' => 'create-category', 'display_name' => 'Tạo mới danh mục', 'group' => 'Danh mục'],
            ['name' => 'update-category', 'display_name' => 'Cập nhật danh mục', 'group' => 'Danh mục'],
            ['name' => 'show-category', 'display_name' => 'Hiển thị danh mục', 'group' => 'Danh mục'],
            ['name' => 'delete-category', 'display_name' => 'Xóa danh mục', 'group' => 'Danh mục'],

            ['name' => 'create-product', 'display_name' => 'Tạo mới sản phẩm', 'group' => 'Sản phẩm'],
            ['name' => 'update-product', 'display_name' => 'Cập nhật sản phẩm', 'group' => 'Sản phẩm'],
            ['name' => 'show-product', 'display_name' => 'Hiển thị sản phẩm', 'group' => 'Sản phẩm'],
            ['name' => 'delete-product', 'display_name' => 'Xóa sản phẩm', 'group' => 'Sản phẩm'],

            ['name' => 'create-coupon', 'display_name' => 'Tạo phiếu giảm giá', 'group' => 'Phiếu giảm giá'],
            ['name' => 'update-coupon', 'display_name' => 'Cập nhật phiếu giảm giá', 'group' => 'Phiếu giảm giá'],
            ['name' => 'show-coupon', 'display_name' => 'Hiển thị phiếu giảm giá', 'group' => 'Phiếu giảm giá'],
            ['name' => 'delete-coupon', 'display_name' => 'Xóa phiếu giảm giá', 'group' => 'Phiếu giảm giá'],

        ];
        foreach($permissions as $item){
            Permisson::updateOrCreate($item);
        }
    }
}