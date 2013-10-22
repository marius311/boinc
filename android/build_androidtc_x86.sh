#/bin/sh

#
# See: http://boinc.berkeley.edu/trac/wiki/AndroidBuildClient#
#

# Script to setup Android toolchain

export ANDROIDTC="$HOME/android-tc"

if [ ! -d $ANDROIDTC ]; then
    $NDKROOT/build/tools/make-standalone-toolchain.sh --platform=android-9 --arch=x86 --install-dir=$ANDROIDTC
fi
