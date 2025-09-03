📦 Moving Goods Seller - Inventory Management System

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Node.js Version](https://img.shields.io/badge/node-%3E%3D18.0.0-brightgreen.svg)](https://nodejs.org/)
[![TypeScript](https://img.shields.io/badge/TypeScript-007ACC.svg?logo=typescript&logoColor=white)](https://www.typescriptlang.org/)
[![Next.js](https://img.shields.io/badge/Next.js-000000.svg?logo=next.js&logoColor=white)](https://nextjs.org/)

A complete inventory management system for moving goods sellers with multilingual support (English, French, Arabic). Built with modern web technologies to provide a seamless experience for managing products, stock, payments, and reminders.

## 🚀 Features

- 📦 **Product Management** - Add, edit, delete products with images
- 📊 **Stock Management** - Real-time stock tracking and alerts
- 💰 **Payment Tracking** - Monitor payments and overdue accounts
- 🔔 **Reminders System** - Never miss important dates
- 🌍 **Multilingual Support** - English, French, and Arabic
- 📱 **Responsive Design** - Works on all devices
- 🎨 **Modern UI** - Built with Tailwind CSS and shadcn/ui
- ⚡ **Fast Performance** - Optimized with Next.js 15

## 🛠️ Tech Stack

### Frontend
- **Framework**: [Next.js 15](https://nextjs.org/) with App Router
- **Language**: [TypeScript](https://www.typescriptlang.org/)
- **Styling**: [Tailwind CSS](https://tailwindcss.com/)
- **UI Components**: [shadcn/ui](https://ui.shadcn.com/)
- **Icons**: [Lucide React](https://lucide.dev/)
- **Internationalization**: [next-intl](https://next-intl.dev/)

### Backend
- **API**: Next.js API Routes
- **Database**: [Prisma ORM](https://www.prisma.io/)
- **Database Client**: PostgreSQL/MySQL/SQLite

### Deployment
- **Platform**: [Vercel](https://vercel.com/)
- **Database**: [PlanetScale](https://planetscale.com/) or [Supabase](https://supabase.com/)

## 📦 Installation

### Prerequisites

- Node.js 18 or later
- npm or yarn
- A database (PostgreSQL, MySQL, or SQLite)

### Local Development

1. **Clone the repository**
   ```bash
   git clone https://github.com/[ayoub87]/moving-goods-seller.git
   cd moving-goods-seller
   ```

2. **Install dependencies**
   ```bash
   npm install
   ```

3. **Set up environment variables**
   ```bash
   cp .env.example .env
   ```
   Edit `.env` file with your database credentials:
   ```env
   DATABASE_URL="your_database_url"
   NEXTAUTH_SECRET="your_secret_key"
   NEXTAUTH_URL="http://localhost:3000"
   ```

4. **Set up database**
   ```bash
   npm run db:push
   ```

5. **Start development server**
   ```bash
   npm run dev
   ```

6. **Open [http://localhost:3000](http://localhost:3000)** in your browser

## 🚀 Deployment

### Vercel (Recommended)

1. **Push to GitHub**
   ```bash
   git add .
   git commit -m "Ready for deployment"
   git push origin main
   ```

2. **Deploy on Vercel**
   - Connect your GitHub repository to Vercel
   - Add environment variables
   - Deploy automatically

### Other Platforms

The application can be deployed to any platform that supports Node.js:
- **Netlify**
- **Railway**
- **DigitalOcean**
- **AWS**
- **Google Cloud**

## 📱 Usage

### User Interface
- Browse products by category
- Search and filter products
- View product details and stock status
- Switch between languages (English/French/Arabic)

### Admin Dashboard
- **Dashboard**: Overview of all statistics
- **Products**: Add, edit, delete products
- **Stock**: Manage inventory levels
- **Payments**: Track payments and overdue accounts
- **Reminders**: Set and manage reminders

## 🌍 Internationalization

The application supports three languages:

- 🇺🇸 **English** - Default language
- 🇫🇷 **French** - French interface
- 🇸🇦 **Arabic** - Arabic interface with RTL support

To add a new language:
1. Create a new JSON file in `messages/` directory
2. Add the language to `src/i18n.ts`
3. Update the navigation component

## 🗄️ Database Schema

### Core Tables
- **Products** - Product information and stock levels
- **Buyers** - Customer information
- **Orders** - Order details and status
- **Payments** - Payment tracking and status
- **Reminders** - Reminder system

### Relationships
- Buyers → Orders (One-to-Many)
- Orders → Order Items (One-to-Many)
- Orders → Payments (One-to-Many)
- Products → Order Items (One-to-Many)

## 🔧 Configuration

### Environment Variables

| Variable | Description | Required |
|----------|-------------|----------|
| `DATABASE_URL` | Database connection string | Yes |
| `NEXTAUTH_SECRET` | Secret for NextAuth.js | Yes |
| `NEXTAUTH_URL` | URL of the application | Yes |

### Database Setup

The application supports multiple databases:

#### PostgreSQL (Recommended for Production)
```env
DATABASE_URL="postgresql://username:password@host:port/database"
```

#### MySQL
```env
DATABASE_URL="mysql://username:password@host:port/database"
```

#### SQLite (Development Only)
```env
DATABASE_URL="file:./dev.db"
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

### Development Workflow

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Style

- Use TypeScript for type safety
- Follow ESLint configuration
- Write clear, descriptive commit messages
- Add comments for complex logic

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- [Next.js](https://nextjs.org/) - The React Framework
- [Prisma](https://www.prisma.io/) - Next-generation ORM
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- [shadcn/ui](https://ui.shadcn.com/) - Beautiful UI components
- [Vercel](https://vercel.com/) - Deployment platform

## 📞 Support

If you have any questions or need help, please:

1. Check the [documentation](README.md)
2. Open an [issue](https://github.com/[ayoub87]/moving-goods-seller/issues)
3. Join our community discussions

---

**Made with ❤️ by [Youbie]**
```
