#
# Cookbook Name:: lamp
# Recipe:: default
#
# Copyright (c) 2014 The Authors, All Rights Reserved.

template "/etc/php5/cli/php.ini" do
	source "cli-php.ini.erb"
	cookbook "lamp"
	owner 'root'
	group 'root'
	mode '0644'
end

# install/upgrade xdebug
package = 'xdebug'
# upgrade when package is installed and latest version is required
if !(`pear list | grep #{package}`.empty?)
	action = :upgrade
else
	action = :install
end

php_pear package do
	action action
end

template "/etc/php5/apache2/php.ini" do
	source "apache-php.ini.erb"
	cookbook "lamp"
	owner 'root'
	group 'root'
	mode '0644'
	notifies :restart, resources("service[apache2]"), :delayed
end

template "/etc/php5/apache2/conf.d/xdebug.ini" do
	source "xdebug.ini.erb"
	cookbook "lamp"
	owner 'root'
	group 'root'
	mode '0644'
	notifies :restart, resources("service[apache2]"), :delayed
end