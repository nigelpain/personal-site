#!/bin/bash
set -x # Show the output of the following commands (useful for debugging)

# Import the SSH deployment key
openssl aes-256-cbc -K $encrypted_73ed489ea1c6_key -iv $encrypted_73ed489ea1c6_iv -in do_rsa.enc -out do_rsa -d
rm do_rsa.enc # Don't need it anymore
chmod 600 do_rsa
mv do_rsa ~/.ssh/id_rsa
