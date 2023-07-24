# OpenEdX HSA

This repository contains a collection of scripts and config files for installing Tutor, Apache2, and Apache Guacamole on Linux, along with a script for verifying checksums.

## Scripts
The repository includes the following scripts:

`bash_tutor_apache_guac.sh` - The script will install Tutor, Apache2, and Apache Guacamole along with their dependencies. It will also configure Apache2 for Guacamole and provide the necessary setup for your system.

After running the installation script, you can access the Tutor documentation for further instructions and usage: https://docs.tutor.overhang.io/

`checksum_verification.sh` - script is used to create a tar archive with a specific modification date, owner, and group. It then calculates the MD5 checksum of the resulting tar archive and displays it. The `checksum_verification.sh` script is designed for checking Linux system administration tasks completed by students. It is applicable when it is needed to verify whether the student has correctly created files, directories, assigned permissions, and more. 

Here's how it works:

1. The course instructor or content creator creates a task and takes a checksum from the corresponding directory using the `checksum_verification.sh` script.
2. The obtained checksum is then added as the correct answer to the task on the LMS OpenEdx platform.
3. When a student completes the same task, they can use the script to generate a checksum of their work.
4. The student's checksum is then compared with the instructor's checksum (uploaded as the correct answer). If the checksums match, the lab work is considered complete.

This approach allows the instructor to automate the result verification process, making it efficient and reliable.

To use the script:

```bash
./checksum_verification.sh directory_to_archive
```


## Config Files
The repository includes the following configuration files:

`apache2.conf`: Apache2 configuration file to be placed in the appropriate directory (e.g., /etc/apache2/).

`guacamole.conf`: Apache Guacamole configuration file to be placed in the appropriate directory (e.g., /etc/apache2/sites-available/).

Please make sure to adjust these config files to match your specific system requirements.

