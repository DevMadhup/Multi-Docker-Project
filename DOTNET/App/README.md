
# MyWebApp

## Overview

MyWebApp is a basic ASP.NET Core MVC application that demonstrates how to build, publish, and run a .NET application using Docker. This project includes basic controllers, views, models, and static files.

## Prerequisites

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [.NET SDK](https://learn.microsoft.com/en-us/dotnet/core/install/linux-ubuntu-install?pivots=os-linux-ubuntu-2404&tabs=dotnet8) (for local development)
- A modern web browser (for testing)

## Getting Started

### 1. Clone the Repository

- Clone the repository to your local machine:

```bash
git clone https://github.com/yourusername/MyWebApp.git
cd MyWebApp
```

### 2. Build and Run Locally 

If you want to build and run the application locally without Docker, follow these steps:

- Install .NET SDK

    - Ensure you have the .NET SDK installed. You can check the installed version with:

    ```bash
    dotnet --version
    ```

    - If not installed, follow the [installation instructions for Ubuntu](https://docs.microsoft.com/en-us/dotnet/core/install/linux-ubuntu).

#### 3. Build and Run the Application

- Restore dependencies:

    ```bash
    dotnet restore
    ```

- Build the application:

    ```bash
    dotnet build
    ```

- Publish the application:

    ```bash
    dotnet publish -c Release -o out
    ```

- Run the application:

    ```bash
    dotnet out/MyWebApp.dll
    ```

The application should now be running at `http://localhost:5000`. Open this URL in your web browser to see the app in action.
