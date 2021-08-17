WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-19 21:46:05

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: nginx

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.webp
- log-call-arguments: true
- converters: (array of 3 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 80
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.webp
- default-quality: 70
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: "auto"
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
"cwebp" не является внутренней или внешней
командой, исполняемой программой или пакетным файлом.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version 2>&1. Result: version: *1.0.3*
Binaries ordered by version number.
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality of source could not be established (Imagick or GraphicsMagick is required) - Using default instead (70).
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.webp.lossy.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.jpg
Dimension: 1672 x 1672
Output:    98674 bytes Y-U-V-All-PSNR 41.54 46.94 46.45   42.68 dB
           (0.28 bpp)
block count:  intra4:       5412  (49.09%)
              intra16:      5613  (50.91%)
              skipped:      1178  (10.68%)
bytes used:  header:            209  (0.2%)
             mode-partition:  22486  (22.8%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   41098 |    3750 |    3448 |    1832 |   50128  (50.8%)
 intra16-coeffs:  |    3493 |    2378 |    3041 |    5233 |   14145  (14.3%)
  chroma coeffs:  |    7041 |    1164 |    1358 |    2116 |   11679  (11.8%)
    macroblocks:  |      36%|      11%|      13%|      41%|   11025
      quantizer:  |      39 |      31 |      25 |      17 |
   filter level:  |      49 |      33 |      38 |      20 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   51632 |    7292 |    7847 |    9181 |   75952  (77.0%)

Success
Reduction: 45% (went from 176 kb to 96 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
"cwebp" не является внутренней или внешней
командой, исполняемой программой или пакетным файлом.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version 2>&1. Result: version: *1.0.3*
Binaries ordered by version number.
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.webp.lossless.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/services-pic-02@2x.jpg
Dimension: 1672 x 1672
Output:    945470 bytes (2.71 bpp)
Lossless-ARGB compressed size: 945470 bytes
  * Header size: 9081 bytes, image data size: 936364
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=6 transform=4 cache=10

Success
Reduction: -424% (went from 176 kb to 923 kb)

Picking lossy
cwebp succeeded :)

Converted image in 4107 ms, reducing file size with 45% (went from 176 kb to 96 kb)
