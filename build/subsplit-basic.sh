#!/bin/sh

if [ -d .subsplit ]; then
    git subsplit update
else
    git subsplit init git@github.com:orchestral/canvas.git
fi

git subsplit publish --heads="master" --no-tags src/Core:git@github.com:orchestral/canvas-core.git
