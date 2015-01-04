#
# Cookbook Name:: lamp
# Recipe:: default
#
# Copyright (c) 2014 The Authors, All Rights Reserved.

# Enable vhost
web_app "apache_sym" do
  template 'apache-sym.conf.erb'
  server_name node['lamp']['server_name']
  server_aliases node['lamp']['server_aliases']
  docroot node['lamp']['docroot']
  log_dir node['apache']['log_dir'] 
end

web_app "apache_example" do
  template 'apache-exe.conf.erb'
end

#Php and configurtion
package 'php5'

#mysql
mysql_service 'default' do
  port '3306'
  version '5.5'
  data_dir '/mysql'
  initial_root_password node['lamp']['server_root_password']
  action [:create, :start]
end