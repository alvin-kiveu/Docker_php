## DOCKERISING THE APPLICATION


```bash
sudo apt update
sudo apt install -y docker.io docker-compose
sudo systemctl enable docker
sudo systemctl start docker
```

Check:

```bash
docker --version
docker-compose version
```


Install Portainer or Monitoring tools if needed.

```bash
docker pull portainer/portainer-ce:latest
```

```bash
docker run -d -p 9000:9000 --name=portainer --restart=always -v /var/run/docker.sock:/var/run/docker.sock -v portainer_data:/data portainer/portainer-ce:latest
```

open http://localhost:9000 in your browser and set up your admin account.


Inside your project folder:

docker compose up --build

Then open in browser:

http://localhost:8080
🔧 If something breaks (quick fixes)
Restart container
docker compose down
docker compose up --build
Check logs
docker logs php_simple_app



