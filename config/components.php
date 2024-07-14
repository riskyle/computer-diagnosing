<?php

return [
    "hardwares" => [
        'CPU' => [
            'link' => 'https://medium.com/@akshatareddy42/what-happens-if-cpu-is-damaged-87e1e9f2b287#:~:text=System%20instability%20or%20failure%3A%20A,can%20lead%20to%20reduced%20performance',
            'issues' => [
                'bluescreen',
                'overheating',
                'slow performance',
                'no display',
                'system instability or failure',
                'error messages',
            ],
            'steps' => [
                'Unplug the processor fan.',
                'Locate and unlatch the clips securing the processor fan and underlying heatsink.',
                'Release the locking lever securing the processor—often appearing as a horizontal arm running the length of the processor—by lifting it upward.',
                'Grasp the processor by its sides using your thumb and index finger, and then remove it by lifting it straight up.',
                'Set the new processor in place using gentle pressure to secure it and then return the locking lever to its horizontal, locked position.',
                'Squirt a small amount of thermal compound—about the size of a dried pea—in the middle of the new processor.',
                'Set the heatsink/fan combination in place and relatch the locking clips.',
            ],
        ],
        'HDD/SSD' => [
            'link' => 'https://www.techtarget.com/searchstorage/tip/4-causes-of-SSD-failure-and-how-to-deal-with-them',
            'issues' => [
                'overheating',
                'bluescreen',
                'drive misuse',
                'connected technology issues',
                'random crashes',
            ],
            'steps' => [
                'Unplug SATA data cable on SSD, leave the power cable connected.',
                'Turn on the PC and boot into BIOS.',
                'Let PC sit idle in BIOS for about half an hour and turn off PC.',
                'Plug the SATA data cable back into SSD and turn on PC to boot into BIOS.',
                'Make sure the boot order is correct; save it and launch Windows.',
            ],
        ],
        'MOTHERBOARD' => [
            'link' => 'https://www.budgetpcupgraderepair.com/how-to-know-motherboard-is-damaged/',
            'issues' => [
                'no power',
                'bluescreen',
                'no display',
                'no sound',
                'random crashes',
                'error messages'
            ],
            'steps' => [
                'Check Power Cables: Make sure all power cables are properly connected, including the main 20-24 pin connector and any additional 4 or 8 pin connectors.',
                'Verify Component Installation: Ensure all components like RAM, graphics card, and CPU are properly installed. Reseating components like the graphics card and RAM can sometimes solve the issue.',
                'Look for Shorts: Make sure the motherboard isn\'t touching any metallic parts of the case which could cause a short circuit. Check for proper installation of standoffs and shielded wires.',
                'Inspect Front Panel Connectors: Ensure that the power button and other front panel connectors are properly connected to the motherboard.',
                'Update UEFI/BIOS: Check if updating the motherboard\'s firmware (UEFI/BIOS) can resolve compatibility issues. Follow manufacturer instructions carefully during the update process.',
                'Otherwise replace the computer’s motherboard: If you want some help choosing, we have a guide to the best motherboards you can buy.'
            ],
        ],
        'POWERSUPPLY' => [
            'link' => 'https://www.velocitymicro.com/blog/top-10-signs-of-power-supply-failure/',
            'issues' => [
                'no power',
                'no display',
                'bluescreen',
                'hard drive/fan fail spin',
                'overheating',
                'psu smoke',
            ],
            'steps' => [
                'Check the input voltage and current of the power supply, and make sure they match the specifications.',
                'Check the output voltage and current of the power supply, and compare them to the expected values.',
                'Check the components of the power supply, such as the transformer, the rectifier, the filter, the regulator, and the protection circuit.',
                'Check the environment of the power supply, such as the temperature, humidity, dust, vibration, and electromagnetic ',
            ],
        ],
        'MONITOR' => [
            'link' => 'https://www.google.com/search?q=common+monitor+issues&sca_esv=74c740cd3a771c52&sca_upv=1&sxsrf=ADLYWILQJqnRjlbGrulMLxDbN-Sp0tQATQ%3A1715177933408&ei=zYk7Zr65GKXkseMPkLyv8AI&oq=issue+of+Monitor+in+computer&gs_lp=Egxnd3Mtd2l6LXNlcnAiHGlzc3VlIG9mIE1vbml0b3IgaW4gY29tcHV0ZXIqAggDMgQQIxgnMgQQIxgnMggQABiABBiiBDIIEAAYgAQYogQyCBAAGIAEGKIEMggQABiABBiiBDIIEAAYgAQYogRIz35QAFiyCHAAeACQAQCYAdwEoAHVCqoBBzItMy41LTG4AQHIAQD4AQGYAgGgAuQEmAMAkgcDNS0xoAekFw&sclient=gws-wiz-serp',
            'issues' => [
                'black screen',
                'color fade',
                'blurry',
                'flickering screen',
                'horizontal or vertical lines',
                'Light or dark patches'
            ],
            'steps' => [
                'Check the connections: Make sure the monitor is properly connected to the computer or device.',
                'Check the power: Ensure that both the monitor and the computer are receiving power.',
            ],
        ],
        'RAM' => [
            'link' => 'https://www.linkedin.com/advice/0/what-common-signs-causes-ram-failure-skills-hardware-diagnostics#:~:text=There%20are%20several%20factors%20that,%2C%20moisture%2C%20or%20static%20electricity.',
            'issues' => [
                'bluescreen',
                'freezes',
                'reboots',
                'corrupted files',
                'slow performance',
                'no display',
            ],
            'steps' => [
                'Load the default setting for the BIOS, or update to the latest BIOS. You may wish to note the current BIOS settings before resetting the BIOS.',
                'Use memory module that is compatible with your processor.',
                'Check memory specification on the product specification page (ARK) after entering processor number in the search box.',
                'Place the memory module in one channel only. Consult the motherboard vendor on the memory configuration on your motherboard.',
                'Test the motherboard: If you have another working motherboard.',
                'Test with another compatible processor, and check if it boots fine using the same components (memory modules and motherboard).',
            ],
        ],
        'GPU' => [
            'link' => 'https://www.digitaltrends.com/computing/common-gpu-problems-how-to-fix/',
            'issues' => [
                'black screen',
                'slow performance',
                'overheating',
                'insufficient power supply to gpu',
                'outdated drivers',
                'noise',
                'no display'
            ],
            'steps' => [
                'Inspect the Settings in Armory Crate.',
                'When “Eco Mode” is applied, independent graphics card information will not be discernible within Device Manager.',
                'Update BIOS, Windows updates, and drivers.',
                'Perform CMOS Reset/Hard Reset.',
                'Perform BIOS Restoration.',
                'Scan for Hardware Changes in Device Manager',
            ],
        ],
        'COOLING SYSTEM' => [
            'link' => 'https://repairpc.co.il/en/solutions-for-computer-cooling-problems/',
            'issues' => [
                'slow performance',
                'random crashes',
                'fan spins too fast',
                'noise'
            ],
            'steps' => [
                'Cleaning, repair or replacement of cooling fan;',
                'Cleaning the radiator and fan from accumulated dust;',
                'Replacement of thermal paste between the heatsink and the processor;',
                'Adjustment and optimization of cooling system using software.',
            ],
        ],
        'CMOS BATTERY' => [
            'link' => 'https://www.dell.com/support/kbdoc/en-in/000135183/how-to-replace-a-cmos-coin-cell-battery-on-your-dell-desktop-computer#:~:text=CMOS%20battery%20life%20varies%20based,error%20message%20and%20so%20on.',
            'issues' => [
                'cmos battery failure',
                'bios settings lost',
                'time-of-day clock stopped error message'
            ],
            'steps' => [
                'Disconnect the power cable of the computer.',
                'Discharge static electricity by pressing and holding the power button for 10-15 seconds.',
                'Replace the battery with the exact same type of coin cell battery.',
                'Removing the CMOS battery erases the BIOS settings.',
                'Ensure to replace with a brand new battery.',
            ],
        ],
        'POWER CABLE' => [
            'link' => 'https://www.scribd.com/document/157982227/system-has-no-power-at-all',
            'issues' => ['no power'],
            'steps' => [
                'Check the power strip or surge protector to make sure it is plugged in and turned on.',
                'Check for loose cables in the back of the computer (especially the main power cable).',
                'Check the outlet for power problems or try moving the power cable to a different outlet.',
                'Try a different power cable.',
                'Discharge the computer',
                'Unplug all cables from the back of the computer (note the positions for all the cables) including power.',
                'Leave computer unplugged with no power to the unit for a minimum of 15 minutes to allow the computer to discharge.',
                'After discharging the computer, plug the power cable back in and check for a status light on the power supply. If the status light on the power supply still does not illuminate, the power supply may need to be replaced.'
            ],
        ],
        'AVR' => [
            'link' => 'https://www.scribd.com/document/157982227/system-has-no-power-at-all',
            'issues' => ['no power'],
            'steps' => [
                'Check the load: Check whether the load of the equipment connected to the AVR is reasonable. Excessive load will affect the stability of the AVR.',
                'Check the circuit: Check whether the internal circuit of the automatic voltage regulator is normal. There may be component aging or failure causing the output voltage to be unstable.',
                'Restart AVR: Try to restart AVR. Sometimes a simple restart can solve some temporary problems.',
                'Check the manual: Check the AVR user manual to understand the fault codes and solutions, and follow the instructions in the manual to troubleshoot.'
            ],
        ],
    ]
];
