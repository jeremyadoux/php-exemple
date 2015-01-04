# Create database if it doesn't exist
ruby_block "create_db" do
    block do
        %x[mysql -uroot -p#{node['lamp']['server_root_password']} -h127.0.0.1 -e "CREATE DATABASE #{node['lamp']['db_name']};"]
    end 
    not_if "mysql -uroot -p#{node['lamp']['server_root_password']} -h127.0.0.1 -e \"SHOW DATABASES LIKE '#{node['lamp']['db_name']}'\" | grep #{node['lamp']['db_name']}";
    action :create
end