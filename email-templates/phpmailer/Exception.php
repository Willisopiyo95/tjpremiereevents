<?php
/**
 * PHPMailer Exception class.
 * PHP Version 5.5.
 *
 * @see       https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 * @license   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 *            ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 *            FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License for details.
 */

namespace PHPMailer\PHPMailer;

/**
 * PHPMailer exception handler.
 */
class Exception extends \Exception
{
    /**
     * Prettify error message output when this exception is printed.
     *
     * @return string
     */
    public function __toString()
    {
        return htmlspecialchars($this->getMessage(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
