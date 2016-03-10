# cara menangani usb di vagrant :
tambahkan file "Vagrantfile-local" pada section "machine_id.vm.provider :virtualbox do |virtualbox|:"
        #farid
	  virtualbox.customize ["modifyvm", :id, "--usb", "on"]
	  virtualbox.customize ["modifyvm", :id, "--usbehci", "on"]
	  virtualbox.customize ["usbfilter", "add", "0", 
	    "--target", :id, 
	    "--name", "This is the identifier",
	    "--manufacturer", "Prolific Technology Inc.",
	    "--product", "USB-Serial Controller"]	
	#end
