# -*- mode: ruby -*-
# vi: set ft=ruby :

# hostsupdaterのインストールを強制する
unless Vagrant.has_plugin?('vagrant-hostsupdater')
  system('vagrant plugin install vagrant-hostsupdater') || exit!
  # Vagrant再起動
  exit system('vagrant', *ARGV)
end

# dotenvのインストールを強制する
unless Vagrant.has_plugin?('dotenv')
  system('vagrant plugin install dotenv') || exit!
  # Vagrant再起動
  exit system('vagrant', *ARGV)
end

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  #env_original_filename='./.env.local'
  #env_filename='./.env'
  #unless File.exist?(env_original_filename)
  #  raise Vagrant::Errors::VagrantError.new, "original [#{env_filename}] not found!"
  #end
  # 必ずenvファイルはコピーする
  #FileUtils.cp(env_original_filename,env_filename)
  #unless File.exist?(env_filename)
  #  raise Vagrant::Errors::VagrantError.new, "fail to copy .env!"
  #end
  #Dotenv.load env_filename
  #config.vm.post_up_message = "vagrant up with [#{ENV['DOTENV_ENVIRONMENT']}] environment."

  # 各プラグインの設定
  if Vagrant.has_plugin?('vagrant-cachier')
    config.cache.auto_detect = true
  end
  if Vagrant.has_plugin?('vagrant-berkshelf')
    config.berkshelf.enabled = false
  end
  if Vagrant.has_plugin?('HostManager')
    config.hostmanager.enabled = false
    config.hostmanager.manage_host = false
  end


  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "CentOS7/CakePHP3"
  config.vm.box_url = "https://s3-ap-northeast-1.amazonaws.com/box.fqdev.com/CentOS7_PHP7_for_CakePHP3_package.box"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.14.9"
  config.vm.hostname = "funwalk-local.vagrant"
  # config.hostsupdater.aliases = ["phpmyadmin-local.vagrant"]
  config.vm.synced_folder ".", "/vagrant", mount_options: ['dmode=777','fmode=755']
  config.vm.provision :shell, inline: "ifup enp0s8", run: "always"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"
 # config.vm.network :public_network, ip: "10.0.1.202", bridge: "en0: Wi-Fi (AirPort)"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
      vb.memory = "1024"
  end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
    config.vm.provision "shell", run: "always", inline: <<-SHELL
    service httpd start
  #   sudo apt-get update
  #   sudo apt-get install -y apache2
    SHELL
end
