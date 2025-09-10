#!/bin/bash
set -e
echo "Updating system..."
sudo apt update -y
sudo apt upgrade -y
echo "Installing Docker..."
if ! command -v docker >/dev/null 2>&1; then
  curl -fsSL https://get.docker.com -o get-docker.sh
  sh get-docker.sh
  sudo usermod -aG docker $USER
fi
if ! command -v docker-compose >/dev/null 2>&1; then
  sudo apt install -y docker-compose
fi
echo "Cloning repo (if not present)"
if [ ! -d digital-file-store ]; then
  git clone https://github.com/khuynhtroc/digital-file-store.git || true
  cd digital-file-store || exit 0
else
  cd digital-file-store
  git pull || true
fi
echo "Bringing up containers..."
sudo docker-compose up -d --build
echo "Done. Check containers with: docker ps"
