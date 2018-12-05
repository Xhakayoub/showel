# Showell Omeka-s Module 

It is a module that allows you to take an image or image collection, analyze it and just render the images that contains only one person (profile picture), by making the facial recognition of each image

-If the module does not detect a face in an image, it will consider it empty and it will delete it
-If the module detects several faces in an image, it will consider it too busy and useless.

## How to Install

### From the Omeka-s Plugin Directory

The Official Showell Module can be found here: https://github.com/Xhakayoub/showel

### From this repository

Go to the [releases](https://github.com/poetapp/wordpress-plugin/releases) section of the repository and download the most recent release.
.

### From source

You will need Phing and Git installed to build from source. To complete the following steps, you will need to open a command line terminal.

Clone the Github repository:  

`git clone https://github.com/Xhakayoub/showel`

From within the checked out repository, run:  

`phing package`

The packaged zip file will be available under the build directory which is created under your locally cloned git repository.

## How to Use

From your Omeka-s administration panel go to `Modules ` and scroll down until you find `Showell`. then click on `Settings`, You will need to activate it.