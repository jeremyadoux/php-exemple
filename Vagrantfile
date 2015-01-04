# -*- mode: ruby -*-
# vi: set ft=ruby :

# IP Address for the host only network, change it to anything you like
# but please keep it within the IPv4 private network range
ip_address = "192.168.33.10"

# The project name is base for directories, hostname and alike
project_name = "projectexample"

Vagrant.configure(2) do |config|
 
  # Disable Berkshelf support
  config.berkshelf.enabled = true
  
  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "ubuntu/trusty64"
  #config.vm.provision :shell, path: "bootstrap.sh"
  
  config.vm.provider "virtualbox" do |v|
	  v.memory = 1024
	  v.cpus = 2
   end
  
   # Set share folder
  config.vm.synced_folder "./html" , "/var/www/html/", :mount_options => ["dmode=777", "fmode=666"]
  config.vm.synced_folder "./mysql" , "/mysql", :mount_options => ["dmode=777", "fmode=666"]
  
  
  # Use hostonly network with a static IP Address and enable
  # hostmanager so we can have a custom domain for the server
  # by modifying the host machines hosts file
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.vm.define project_name do |node|
    node.vm.hostname = "php-exemples.local"
    node.vm.network :private_network, ip: ip_address
    node.hostmanager.aliases = [ "www.php-exemples.local" ]
  end
  config.vm.provision :hostmanager
  
  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "cookbooks"
	chef.add_recipe "build-essential"
    chef.add_recipe "lamp"
	#chef.add_recipe "libxml2"
	#chef.add_recipe "composer"	
	chef.add_recipe "php"
	#chef.add_recipe "rabbitmq"
	chef.add_recipe "git"
	chef.add_recipe "lamp::db"
	chef.add_recipe "lamp::php"
	
	chef.json = {
	  :php => {
		:ext_conf_dir => "/etc/php5/apache2/conf.d",
		:directives => { :display_errors => 'On', :default_charset => "UTF-8" }
	  },
      :lamp => {
        # Project name
        :name           => "symfony",

        # Name of MySQL database that should be created
        :db_name        => "symfony",
		:server_root_password	=> "symfony",

        # Server name and alias(es) for Apache vhost
        :server_name    => "symfony.local",
        :server_aliases =>  [ "www.symfony.local" ],

        # Document root for Apache vhost
        :docroot        => "/var/www/html/symfony"
      }
	}
  end
    
  #config.vm.network "private_network", ip: "192.168.33.10"
end
